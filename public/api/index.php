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

//$flavors = $compute->listFlavors(true);
//
//
//foreach ($flavors as $flavor) {
//    print_r($flavor);
//    echo '<br><br>';
//}


$servers = $compute->listServers(true);
$final = null;
foreach ($servers as $server) {
    print_r($server);
    echo '<br><br>';
    //$server->start();
}
//print_r($final);
//$final->reboot();

//$myserver = $compute->getServer([
//    'id' => '36fa5777-98fd-4653-83cb-39ff48437f32'
//]);
//$myserver->retrieve();
//print_r($myserver);
//$myserver->start();