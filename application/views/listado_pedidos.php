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

<?php foreach ($pedidos as $pedido): ?>
        <div class="row">
        <div class="col-md-3">
            <?php echo $pedido->idPedido; ?>
        </div>
        <div class="col-md-3">
            <?php echo $pedido->fechaPedido; ?>
        </div>
        <div class="col-md-3">
            <?php echo $pedido->cargosD; ?>
        </div>
        <div class="col-md-3">
            <a href="<?php echo 'pedidos/detalle/'.$pedido->idPedido; ?>">detalle</a>
        </div>
    </div>
<?php endforeach; ?>
</div>
</html>