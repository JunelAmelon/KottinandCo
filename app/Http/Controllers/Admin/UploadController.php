<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function image(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = 'article-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img'), $filename);
            
            return response()->json([
                'location' => asset('assets/img/' . $filename)
            ]);
        }
        
        return response()->json(['error' => 'No file uploaded.'], 400);
    }
}
