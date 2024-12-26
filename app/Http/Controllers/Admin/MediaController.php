<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('articles/images', 'public');
            
            return response()->json([
                'location' => Storage::url($path)
            ]);
        }
        
        return response()->json(['error' => 'No file uploaded.'], 400);
    }
}
