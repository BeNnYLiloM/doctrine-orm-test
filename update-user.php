<?php

require_once "main.php";

$name = $argv[1];
$password = md5($argv[2]);
//$newPassword = md5($argv[3]);

$dql = "SELECT u, n, p FROM User u JOIN u.name n JOIN u.password p WHERE u.name = '".$name."' AND u.password = '".$password."'";
//$dql = "SELECT u, n, p FROM User u JOIN u.name n JOIN u.password p";
//$dql = "SELECT u, n, p FROM User u WHERE u.n = '".$name."' AND u.p = '".$password."'";

$query = $entityManager->createQuery($dql);
$result = $query->getResult();

foreach ($result as $b) {
    echo $b."\n";
}


/*if($query){
    $dql = "UPDATE User u SET u.password = '".$newPassword."' WHERE u.name = '".$name."'";

    $query = $entityManager->createQuery($dql);
    $result = $query->getResult();
} else {
    echo "User with such data is not found!";
}*/