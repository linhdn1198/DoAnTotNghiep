<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function changeLanguage($language)
    {
        \Session::put('language', $language);

        return redirect()->back();
    }
}
