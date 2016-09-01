<?php

require_once '../src/app/bootstrap.php';

$openstack = new OpenStack\OpenStack([
    'authUrl' => 'http://10.0.0.100:5000/v3/',
    'region'  => 'RegionOne',
    'user' => [
        'name' => 'admin',
        'password' => '12345678',
        'domain' => ['name' => 'default']
    ],
    'scope' => ['project' => ['id' => '901ed93dfb1648cb896868869897640e']]
]);

$userName='Mirage';

$identity = $openstack->identityV3(['region' => 'RegionOne']);


$user = $identity->createUser([
    'defaultProjectId' => 'a15ee72567894c3eae93df9c0da02bed',
    'description'      => 'NA',
    'domainId'         => '4c9404a0a9a846a1ae849eae5a07ecbb',
    'enabled'          => true,
    'name'             => 'Mirage',
    'password'         => '87654321'
]);