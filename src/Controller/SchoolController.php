<?php

namespace Pagekit\School\Controller;

use Pagekit\Application as App;

class SchoolController
{
    /**
     * @Access(admin=true)
     */
    public function indexAction()
    {
        return [
            '$view' => [
                'title' => __("SCHOOL"),
                'name' => 'school:views/admin/index.php'
            ]
        ];
    }



    /**
     * @Route("/")
     */
     public function siteAction()
    {

    //    $module = App::module('todo');
    //    $config = $module->config;

        return
        [
            '$view' =>
            [
                'title' => __("SCHOOL"),
                'name' => 'school:views/index.php'
            ] ,

            //'entries' => $config['entries']
        ];
    }
}
