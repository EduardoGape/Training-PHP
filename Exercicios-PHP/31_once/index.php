<?php 
require_once 'inc/functions.php'; 
require 'inc/variables.php'; ?>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <?php para_print( $description ); ?>
        <small>By: <?php echo $author; ?></small>
    </body>
</html>