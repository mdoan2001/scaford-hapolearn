<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function change(Request $request)
    {
        $locale = $request->lang;
        App::setLocale($locale);

        Cookie::queue('locale', $locale, 10000000);
        return redirect()->back();
    }
}
