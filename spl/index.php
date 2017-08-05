<?php

require '../vendor/autoload.php';


// Countable
//$collection = new \App\Collection(['one', 'two', 'three']);
//echo count($collection);


// ArrayAccess
//$container = new \App\Container();
//
//$container['config'] = function () {
//    return [
//        'db_host' => 'localhost',
//        'db_user' => 'root',
//        'db_password' => 'root'
//    ];
//};
//
//echo isset($container['config']); // calls offsetExists
//unset($container['config']); // calls offsetUnset


// IteratorAggregate and ArrayIterator
$user1 = new \App\Model\User();
$user1->name = 'ivan';
$user1->email = 'ivan@example.com';

$user2 = new \App\Model\User();
$user2->name = 'dale';
$user2->email = 'dale@example.com';

$users = new \App\Collection([$user1, $user2]);

foreach ($users as $user) {
//    echo $user->name;
}


// JsonSerializable
echo json_encode($users); // calls jsonSerialize
echo $users; // calls __toString