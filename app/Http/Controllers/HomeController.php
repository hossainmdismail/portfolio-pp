<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setCanonical('https://esmail.pro' . request()->getPathInfo());

        $project = Project::where('category_status', 'project')->latest()->get()->take(6);
        $casestudy = Project::where('category_status', 'casestudy')->latest()->get()->take(6);
        return view('themes.portfolio.index', [
            'projects' => $project,
            'casestudies' => $casestudy,
        ]);
    }
}
