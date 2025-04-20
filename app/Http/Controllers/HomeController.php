<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {

        SEOTools::setDescription('This is the portfolio of a Laravel developer focused on building modern, clean web apps.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        $project = Project::where('category_status', 'project')->latest()->get()->take(6);
        $casestudy = Project::where('category_status', 'casestudy')->latest()->get()->take(6);
        return view('themes.portfolio.index', [
            'projects' => $project,
            'casestudies' => $casestudy,
        ]);
    }
}
