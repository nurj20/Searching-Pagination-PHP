<?php
$host = 'localhost:3307';
$user = 'root';
$pwd = '';
$dbname = 'serachdb';

$dns = "mysql:host=".$host.";dbname=".$dbname;
$pdo = new PDO($dns, $user, $pwd);



?>