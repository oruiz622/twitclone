<?php
include 'database/connection.php';
include 'classes/User.php';
include 'classes/Tweet.php';
include 'classes/Follow.php';

global $pdo;

$getFromU = new User($pdo);
$getFromT = new Tweet($pdo);
$getFromF = new Follow($pdo);

define("BASE_URL", "http://localhost/twitclone/");