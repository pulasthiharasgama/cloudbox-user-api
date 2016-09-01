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

$identity = $openstack->identityV3(['region' => 'RegionOne']);

$user = $identity->getUser('00119dd547594acc874b0b3978c0b9ba');

$user->delete();