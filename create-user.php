<?php

require_once "main.php";

$name = $argv[1];
$password = md5($argv[2]);

$user = new User();
$user->setUserName($name);
$user->setUserPassword($password);
if($name == 'Admin') {
    $user->setUserStatus('1');
} else {
    $user->setUserStatus('2');
}

$entityManager->persist($user);
$entityManager->flush();

echo "Created User by name: ".$user->getUserName()."\n";