<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Esmail Khalifa - Webflow Expert & Laravel Developer", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'Esmail Khalifa - Webflow Expert & Laravel Developer - Dashboard'
            'description'  => 'I’m Esmail Khalifa (Hossain Md Ismail), a Webflow expert and Laravel developer offering freelance and remote services worldwide. Let’s build your next website or web application with modern, responsive, and SEO-friendly design.', // set false to total remove
            'separator'    => ' - ',
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
            'canonical'    => true, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index, follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
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
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'I’m Esmail Khalifa (Hossain Md Ismail), a Webflow expert and Laravel developer offering freelance and remote services worldwide. Let’s build your next website or web application with modern, responsive, and SEO-friendly design.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Esmail Khalifa Portfolio',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Esmail Khalifa - Webflow Expert & Laravel Developer',
            'description' => 'Building modern, responsive, and SEO-optimized websites using Webflow and Laravel. Available for freelance and remote jobs worldwide.',
            'url'         => null,
            'type'        => 'Person',
            'images'      => [],
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
