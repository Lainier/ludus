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
            <?php foreach ($usuarios as $usuario): ?>
        <div class="row">
            <div class="col-md-2">
                <?php echo $usuario->username; ?>
            </div>
            <div class="col-md-4">
                <?php echo $usuario->first_name.' '.$usuario->last_name; ?>
            </div>
            <div class="col-md-1">
                <?php echo $usuario->date_of_birth; ?>
            </div>
            <div class="col-md-2">
                <?php echo $usuario->email; ?>
            </div>
            <div class="col-md-3">
                <a href="<?php echo 'evento/eventos_usuario/'.$usuario->id; ?>">Eventos</a>
            </div>
        </div><?php endforeach; ?>
    </div>
</html> 