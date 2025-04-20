<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\File;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        // Add the main URL to the sitemap (your homepage or root URL)
        $sitemap->add(Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setLastModificationDate(now()));

        // Add About Us page
        $sitemap->add(Url::create('/about-us')
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setLastModificationDate(now()));

        // Add Contact Us page
        $sitemap->add(Url::create('/contact-us')
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setLastModificationDate(now()));

        // Add Projects (example of dynamic URLs from a database)
        $projects = \App\Models\Project::all();
        foreach ($projects as $project) {
            $sitemap->add(Url::create("/projects/{$project->slug}")
                ->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setLastModificationDate($project->updated_at));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));

        return response()->download(public_path('sitemap.xml'), 'sitemap.xml');
    }
}
