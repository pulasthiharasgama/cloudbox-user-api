<?php

require_once '../src/app/bootstrap.php';

#c9870d37fe704304b527f28f389d949c local
#a15ee72567894c3eae93df9c0da02bed
$openstack = new OpenStack\OpenStack([
    'authUrl' => 'http://10.0.0.100:5000/v3/',
    'region'  => 'RegionOne',
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
    'name'     => 'tadaa',
    'imageId'  => '025b6a39-7d68-4b17-a8ba-cd994f1a5906',
    'flavorId' => '1',

//    // Required if multiple network is defined
    'networks'  => [
        ['uuid' => '6e240bd7-3ffa-4cab-bccd-3e40ded21c43']
    ]
];

// Create the server
/**@var OpenStack\Compute\v2\Models\Server $server */
$server = $compute->createServer($options);

echo $server->ipv4;