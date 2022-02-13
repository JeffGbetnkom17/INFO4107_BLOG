<?php
    ini_set('display_errors', 'on');
    include("includes/config.php");
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AWS Blog Admin</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/blog.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="blog-masthead" id="header">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="index.php">Admin Page</a>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">