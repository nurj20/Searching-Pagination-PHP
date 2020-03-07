<?php
$uri = $_SERVER['REQUEST_URI'];
$url = (strpos($uri, 'includes')?'../':'');

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="'.$url.'style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- navigation starts -->
    <nav class="navbar navbar-expand-sm navbar-light bg-primary mb-3">
    <a href="#" class="navbar-brand">SearchDemo</a>
    <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a href="'.$url.'index.php">Home </a></li>
    <li class="nav-item"><a href="'.$url.'articles.php"> Articles</a></li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/includes/search.php" method="GET">
      <input class="form-control mr-sm-2" type="text" name="searchItem" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="submit" value="search">Search</button>
    </form>
    </nav> ';
