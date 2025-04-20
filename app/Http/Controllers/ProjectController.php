<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ProjectController extends Controller
{
    public function view($slug)
    {
        $project = Project::where('slug', $slug)->first();

        // Set SEO tags dynamically
        SEOTools::setTitle($project->seo_title ?? $project->title);
        SEOTools::setDescription($project->seo_description ?? Str::limit(strip_tags($project->content), 160));
        SEOTools::metatags()->setKeywords($project->seo_tags);

        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()->setTitle($project->seo_title ?? $project->title);
        SEOTools::opengraph()->setDescription($project->seo_description ?? Str::limit(strip_tags($project->content), 160));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addImage(asset('storage/' . $project->thumbnail));

        SEOTools::jsonLd()->setTitle($project->seo_title ?? $project->title);
        SEOTools::jsonLd()->setDescription($project->seo_description ?? Str::limit(strip_tags($project->content), 160));
        SEOTools::jsonLd()->addImage(asset('storage/' . $project->thumbnail));

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
