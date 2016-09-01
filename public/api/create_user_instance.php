<?php
session_start();
require_once '../../src/app/bootstrap.php';
require_once ('../db/user_app.php');
require_once ('../db/user.php');
#c9870d37fe704304b527f28f389d949c local
#a15ee72567894c3eae93df9c0da02bed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_id = $_SESSION['id'];

    $user = get_user_by_name($_SESSION['username']);

    $openstack = new OpenStack\OpenStack([
        'authUrl' => 'http://10.0.0.100:5000/v3/',
        'region' => 'RegionOne',
        'user' => [
            'name' => 'demo',
            'password' => '12345678',
            'domain' => ['name' => 'default']
        ],
        'scope' => ['project' => ['id' => 'a15ee72567894c3eae93df9c0da02bed']]
    ]);


    $compute = $openstack->computeV2(['region' => 'RegionOne']);

    $options = [
        // Required
        'name' => $user->full_name .': Blog',
        'imageId' => '025b6a39-7d68-4b17-a8ba-cd994f1a5906',
        'flavorId' => '6',

//    // Required if multiple network is defined
        'networks' => [
            ['uuid' => '6e240bd7-3ffa-4cab-bccd-3e40ded21c43']
        ]
    ];

// Create the server
    /**@var OpenStack\Compute\v2\Models\Server $server */
    $server = $compute->createServer($options);
    usleep(10000000);
    $server->retrieve();
    $ipv4 = array_values($server->addresses)[0][0]['addr'];
    if (isset($ipv4)) {
        update_user_app($user->id,$ipv4,$user->full_name .': Blog');
        echo $ipv4;
    }
}