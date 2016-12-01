<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function overview()
    {
        $session_data = [
            'username' => 'mirage',
//            'menu_items' => array("Overview", "My Apps", "Admin Apps", "Users"),
            'menu_items' => [
                [
                    'name' => 'Overview',
                    'url' => '/dashboard/overview'
                ],
                [
                    'name' => 'My Apps',
                    'url' => '/dashboard/apps/user'
                ],
                [
                    'name' => 'Admin Apps',
                    'url' => '/dashboard/apps/admin'
                ],
                [
                    'name' => 'Users',
                    'url' => '/dashboard/users'
                ]
            ]

        ];

        $object1 = new \stdClass();
        $object1->ipv4 = '10.0.0.1';
        $object1->name = 'Here we go';
        $object1->description = 'Description?';

        $object2 = new \stdClass();
        $object2->ipv4 = '10.0.34.3';
        $object2->name = 'Nooo';
        $object2->description = 'Lol Description?';

        $all_running_apps = [$object1, $object2];
        return view('dashboard.overview', ['all_running_apps' => $all_running_apps]);
    }

    public function appsUser()
    {
        $session_data = [
            'username' => 'mirage',
//            'menu_items' => array("Overview", "My Apps", "Admin Apps", "Users"),
            'menu_items' => [
                [
                    'name' => 'Overview',
                    'url' => '/dashboard/overview'
                ],
                [
                    'name' => 'My Apps',
                    'url' => '/dashboard/apps/user'
                ],
                [
                    'name' => 'Admin Apps',
                    'url' => '/dashboard/apps/admin'
                ],
                [
                    'name' => 'Users',
                    'url' => '/dashboard/users'
                ]
            ]

        ];

        $is_wordpress_launched = false;

        $object1 = new \stdClass();
        $object1->id = '1';
        $object1->name = 'Wordpress';
        $object1->description = 'Wordpress Description?';

        $object2 = new \stdClass();
        $object2->id = '2';
        $object2->name = 'Joomla';
        $object2->description = 'Description? Joomla';

        $all_user_apps = [$object1, $object2];

        $object3 = new \stdClass();
        $object3->ipv4 = '10.32.34.92';
        $object3->name = 'Wordpress';
        $object3->description = 'Wordpress Description?';

        $my_wordpress = $object3;

        return view('dashboard.apps.user', ['all_user_apps' => $all_user_apps, 'is_wordpress_launched' => $is_wordpress_launched,'my_wordpress'=>$my_wordpress]);
    }

    public function appsAdmin()
    {
        $session_data = [
            'username' => 'mirage',
//            'menu_items' => array("Overview", "My Apps", "Admin Apps", "Users"),
            'menu_items' => [
                [
                    'name' => 'Overview',
                    'url' => '/dashboard/overview'
                ],
                [
                    'name' => 'My Apps',
                    'url' => '/dashboard/apps/user'
                ],
                [
                    'name' => 'Admin Apps',
                    'url' => '/dashboard/apps/admin'
                ],
                [
                    'name' => 'Users',
                    'url' => '/dashboard/users'
                ]
            ]

        ];

        $object1 = new \stdClass();
        $object1->id = '1';
        $object1->name = 'MediaWiki';
        $object1->description = 'wiki Description?';

        $object2 = new \stdClass();
        $object2->id = '2';
        $object2->name = 'Calender';
        $object2->description = 'Description? calender';

        $all_admin_apps = [$object1, $object2];

        return view('dashboard.apps.admin', ['all_admin_apps' => $all_admin_apps]);
    }

    public function users()
    {
        $session_data = [
            'username' => 'mirage',
//            'menu_items' => array("Overview", "My Apps", "Admin Apps", "Users"),
            'menu_items' => [
                [
                    'name' => 'Overview',
                    'url' => '/dashboard/overview'
                ],
                [
                    'name' => 'My Apps',
                    'url' => '/dashboard/apps/user'
                ],
                [
                    'name' => 'Admin Apps',
                    'url' => '/dashboard/apps/admin'
                ],
                [
                    'name' => 'Users',
                    'url' => '/dashboard/users'
                ]
            ]

        ];

        $object1 = new \stdClass();
        $object1->full_name = 'Mirage';
        $object1->position = 'TDA';

        $object2 = new \stdClass();
        $object2->full_name = 'Alice';
        $object2->position = 'Good';

        $object3 = new \stdClass();
        $object3->full_name = 'Bob';
        $object3->position = 'Nice';

        $all_users = [$object1, $object2, $object3];

        return view('dashboard.users', ['all_users' => $all_users]);
    }
}
