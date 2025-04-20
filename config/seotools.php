<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        'defaults' => [
            'title'        => "Esmail Khalifa - Webflow Expert & Laravel Developer",
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
                'Webflow freelancer',
                'hire Webflow designer',
                'hire Laravel developer',
                'portfolio developer',
                'custom website designer',
                'web developer Bangladesh',
                'remote full-stack developer',
                'webflow portfolio expert'
            ],
            'canonical'    => 'full',
            'robots'       => 'index, follow',
        ],
        /*
         * Webmaster tags are always added.
         */
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
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Esmail Khalifa - Webflow Expert & Laravel Developer',
            'description' => 'Freelance web developer specializing in Webflow and Laravel. Available for remote projects, portfolio design, and full-stack web development.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'Esmail Khalifa',
            'images'      => '', // Update with your image path
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
            'site' => '@yourtwitterhandle', // optional
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Esmail Khalifa - Webflow Expert & Laravel Developer',
            'description' => 'I build modern, responsive, and high-performing websites and applications using Webflow and Laravel. Available for freelance and remote jobs.',
            'url'         => null,
            'type'        => 'Person',
            'images'      => '', // Update as needed
        ],
    ],
];
