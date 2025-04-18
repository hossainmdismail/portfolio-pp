<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function view($slug)
    {
        $project = Project::where('slug', $slug)->first();

        if ($project) {
            return view('themes.portfolio.pages.project', [
                'project' => $project,
            ]);
        }
    }

    public function projects()
    {
        $projects = Project::where('category_status', 'project')->latest()->get();
        return view('themes.portfolio.pages.projects', [
            'projects' => $projects,
            'type' => 'project',
        ]);
    }

    public function casetudy()
    {
        $projects = Project::where('category_status', 'casestudy')->get();
        return view('themes.portfolio.pages.projects', [
            'projects' => $projects,
            'type' => 'casestudy',
        ]);
    }
}
