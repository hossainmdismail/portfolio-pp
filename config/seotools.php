<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),

    'meta' => [
        'defaults' => [
            'title'        => "MD Ismail Hossain - Webflow Expert & Laravel Developer",
            'titleBefore'  => false,
            'description'  => 'I’m Esmail Khalifa (Hossain Md Ismail), a Webflow expert and Laravel developer offering freelance and remote services worldwide. Let’s build your next website or web application with modern, responsive, and SEO-friendly design.',
            'separator'    => ' | ',
            'keywords'     => [
                'Esmail Khalifa',
                'Hossain Md Ismail',
                'Webflow expert',
                'Laravel developer',
                'freelance web developer',
                'remote web developer',
                'hire web developer',
                'Webflow freelancer',
                'Laravel freelancer',
                'portfolio web developer',
                'responsive website designer',
                'freelance front-end developer',
                'hire full stack developer',
                'remote Webflow expert'
            ],
            'canonical'    => 'full',
            'robots'       => 'index, follow',
        ],

        'webmaster_tags' => [
            'google'    => env('GOOGLE_VERIFICATION', null),
            'bing'      => env('BING_VERIFICATION', null),
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],

    'opengraph' => [
        'defaults' => [
            'title'       => 'MD Ismail Hossain - Webflow Expert & Laravel Developer',
            'description' => 'Freelance web developer specializing in Webflow and Laravel. Available for remote projects, portfolio design, and full-stack development.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'MD Ismail Hossain Portfolio',
            'images'      => [asset('seo/gig-3.png'), asset('seo/gig2.png'), asset('seo/gig-1.png')],
        ],
    ],

    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
            'site' => '@esmailkhaalifa',
        ],
    ],

    'json-ld' => [
        'defaults' => [
            'title'       => 'MD Ismail Hossain - Webflow Expert & Laravel Developer',
            'description' => 'Building modern, responsive, and SEO-optimized websites using Webflow and Laravel. Available for freelance and remote jobs worldwide.',
            'url'         => null,
            'type'        => 'Person',
            'images'      => [asset('seo/gig-3.png'), asset('seo/gig2.png'), asset('seo/gig-1.png')],
            'name'        => 'Hossain Md Ismail',
            'email'       => 'hello@esmail.pro',
            'sameAs'      => [
                'https://www.linkedin.com/in/md-ismail-hossain-911a96236/',
                'https://x.com/esmailkhaalifa',
                'https://www.fiverr.com/s/7YrABYe',
                'https://www.upwork.com/freelancers/~018ae8da89391f7845?mp_source=share',
            ],
        ],
    ],
];
