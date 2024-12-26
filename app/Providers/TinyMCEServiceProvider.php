<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TinyMCEServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            base_path('vendor/tinymce/tinymce') => public_path('vendor/tinymce/tinymce'),
        ], 'tinymce');

        config(['tinymce.api_key' => env('TINYMCE_API_KEY')]);
    }
}
