<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index()
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
        return view('index', compact('session_data'));
    }
}