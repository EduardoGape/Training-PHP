<?php require 'inc/variables.php'; ?>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <?php include 'template/nav.php'; ?>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <small>By: <?php echo $author; ?></small>
    </body>
</html>