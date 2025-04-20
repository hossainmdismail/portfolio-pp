<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class SinglePageController extends Controller
{
    public function about()
    {
        SEOTools::setTitle('About Us - Learn More About Us');
        SEOTools::setDescription('Learn more about our team, values, and mission. We are committed to delivering quality web development solutions.');
        SEOTools::metatags()->setKeywords(['about us', 'our team', 'web development company', 'Laravel expert', 'Webflow development']);

        SEOMeta::setCanonical('https://esmail.pro' . request()->getPathInfo());

        SEOTools::opengraph()->setTitle('About Us - Learn More About Us');
        SEOTools::opengraph()->setDescription('Discover who we are, our values, and why we are the best team for your web development needs.');
        SEOTools::opengraph()->setUrl(url()->current());

        SEOTools::jsonLd()->setTitle('About Us - Learn More About Us');
        SEOTools::jsonLd()->setDescription('A comprehensive look at our team and our services in web development.');

        return view('themes.portfolio.pages.about');
    }
    public function contact()
    {
        SEOTools::setTitle('Contact Us - Get in Touch with Us');
        SEOTools::setDescription('Have any questions or need assistance? Get in touch with us today for web development inquiries, support, or project discussions.');
        SEOTools::metatags()->setKeywords(['contact us', 'get in touch', 'web development support', 'hire web developer', 'contact for projects']);
        SEOMeta::setCanonical('https://esmail.pro' . request()->getPathInfo());

        SEOTools::opengraph()->setTitle('Contact Us - Get in Touch with Us');
        SEOTools::opengraph()->setDescription('Reach out to us for any questions, projects, or collaborations. We’re always here to help.');
        SEOTools::opengraph()->setUrl(url()->current());

        SEOTools::jsonLd()->setTitle('Contact Us - Get in Touch with Us');
        SEOTools::jsonLd()->setDescription('Contact us for any inquiries or project opportunities in web development.');

        return view('themes.portfolio.pages.contact');
    }
}
