<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    
    <div class="container">
        <h2><?php echo $title; ?></h2>
            <?php foreach ($productos as $producto): ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo $producto->nombreProd; ?>
            </div>
            <div class="col-md-4">
                <?php echo $producto->precioE; ?>
            </div>
            <div class="col-md-4">
                <?php echo $producto->existencias; ?>
            </div>
        </div><?php endforeach; ?>
    </div>
</html> 