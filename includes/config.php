<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple Menu Resep Makanan',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
            'news'=>'News',

         ],
        // Combine headline_title and headline_img into one 'headlines' array
        'headlines' => [
            'headline-1' => [
                'title' => 'Menu Mie Simple',
                'img'   => 'spaghetti.jpg',
                'url'   => '/article/headline-1',
            ],
            'headline-2' => [
                'title' => 'Menu Soup Kaldu',
                'img'   => 'soup.jpg',
                'url'   => '/article/headline-2',
            ],
            'headline-3' => [
                'title' => 'Pancakes Simple',
                'img'   => 'pancakes background.jpg',
                'url'   => '/article/headline-3',
            ],
        ],

        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
