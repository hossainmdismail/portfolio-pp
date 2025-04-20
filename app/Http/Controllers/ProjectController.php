<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
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

        // Set SEO title and description for the "projects" page
        SEOTools::setTitle('Our Projects - Web Development by MD Ismail Hossain');
        SEOTools::setDescription('Browse through the web development projects by MD Ismail Hossain, showcasing my expertise in Laravel and Webflow development.');
        SEOTools::metatags()->setKeywords(['projects', 'portfolio', 'web development', 'MD Ismail Hossain', 'Laravel expert', 'Webflow development', 'case study']);

        SEOMeta::setCanonical('https://esmail.pro' . request()->getPathInfo());

        SEOTools::opengraph()->setTitle('Our Projects - Web Development by MD Ismail Hossain');
        SEOTools::opengraph()->setDescription('Explore web development projects by MD Ismail Hossain, showcasing expertise in Laravel, Webflow, and modern web technologies.');
        SEOTools::opengraph()->addProperty('publisher', 'MD Ismail Hossain');
        SEOTools::opengraph()->setUrl(url()->current());

        SEOTools::jsonLd()->setTitle('Our Projects - Web Development by MD Ismail Hossain');
        SEOTools::jsonLd()->setDescription('Browse through the portfolio of MD Ismail Hossain, showcasing my experience in Laravel and Webflow development.');


        return view('themes.portfolio.pages.projects', [
            'projects' => $projects,
            'type' => 'project',
        ]);
    }

    public function casetudy()
    {
        $projects = Project::where('category_status', 'casestudy')->get();

        // Set SEO title and description for the "case studies" page
        SEOTools::setTitle('Case Studies by MD Ismail Hossain - Web Development Success Stories');
        SEOTools::setDescription('Check out the web development success stories by MD Ismail Hossain, where I showcase how I solve real-world problems using Laravel and Webflow.');
        SEOTools::metatags()->setKeywords(['case studies', 'web development case studies', 'Laravel', 'Webflow', 'MD Ismail Hossain']);


        SEOMeta::setCanonical('https://esmail.pro' . request()->getPathInfo());
        SEOTools::opengraph()->setTitle('Case Studies by MD Ismail Hossain - Web Development Success Stories');
        SEOTools::opengraph()->setDescription('Discover the web development success stories by MD Ismail Hossain, solving real-world challenges with Laravel and Webflow.');
        SEOTools::opengraph()->addProperty('publisher', 'MD Ismail Hossain');
        SEOTools::opengraph()->setUrl(url()->current());

        SEOTools::jsonLd()->setTitle('Case Studies by MD Ismail Hossain - Web Development Success Stories');
        SEOTools::jsonLd()->setDescription('Read through the case studies of MD Ismail Hossain’s web development projects, demonstrating expertise in Laravel and Webflow.');

        return view('themes.portfolio.pages.projects', [
            'projects' => $projects,
            'type' => 'casestudy',
        ]);
    }
}
