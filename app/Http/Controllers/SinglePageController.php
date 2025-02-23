<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function about()
    {
        return view('themes.default.pages.about');
    }
    public function contact()
    {
        return view('themes.default.pages.contact');
    }
}
