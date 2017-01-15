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

<?php foreach ($eventos as $evento): ?>
        <div class="row">
        <div class="col-md-2">
            <?php echo $evento->nombretipo; ?>
        </div>
        <div class="col-md-2">
            <?php
            if ($evento->nombretipo!=$evento->nombresubtipo) {
                echo $evento->nombresubtipo;
                }
            ?>
        </div>
        <div class="col-md-3">
            <?php echo $evento->lugar; ?>
        </div>
        <div class="col-md-2">
            <?php echo $evento->inicio; ?>
        </div>
        <div class="col-md-2">
            <?php echo $evento->fin; ?>
        </div>
        <div class="col-md-2">
            <a href="<?php echo 'pedidos/detalle/'.$evento->idEvento; ?>">Detalles</a>
        </div>
    </div>
<?php endforeach; ?>
</div>
</html>