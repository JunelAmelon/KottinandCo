<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'required|string'
            ]);

            // Log pour le debugging
            Log::info('Tentative d\'envoi d\'email', $validated);

            Mail::to(config('mail.from.address'))->send(new ContactMail($validated));

            Log::info('Email envoyé avec succès');

            return response()->json([
                'success' => true,
                'message' => 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Erreur de validation', ['errors' => $e->errors()]);
            
            return response()->json([
                'success' => false,
                'message' => 'Veuillez vérifier les informations saisies.',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi du message', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.'
            ], 500);
        }
    }
}
