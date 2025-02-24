<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function view($slug)
    {
        $project = Project::find($slug);
        if ($project) {
            return view('themes.default.pages.project', [
                'project' => $project,
            ]);
        }
    }
}
