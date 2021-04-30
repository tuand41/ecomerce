<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function translate($locale)
    {
        session()->put('lang', $locale);

         return redirect()->back();
    }
}
