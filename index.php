<?php

use Pagekit\Application;

return [

    'name' => 'school',

    'main' => function(Application $app) {

    },

    'autoload' => [
        'Pagekit\\School\\' => 'src'
    ],

    'resources' => [
        'school:' => ''
    ],

    'routes' => [
        '@school' => [
            'path' => '/school',
            'controller' => 'Pagekit\\School\\Controller\\SchoolController'
        ]
    ],

    'config' => [
        'entries' => [
            ['message' => 'Buy milk.', 'done' => false],
            ['message' => 'Read book.', 'done' => false],
            ['message' => 'Drink coffee.', 'done' => true]
        ]
    ],

    'menu' => [

        'school' => [
            'label'  => 'School',
            'icon'   => 'app/system/assets/images/placeholder-icon.svg',
            'url'    => '@school',
            'active' => '@school/*',
            'access' => 'school: manage'
        ]

    ],

];
