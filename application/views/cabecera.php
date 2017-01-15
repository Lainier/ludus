<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    

<div class="container">
    <div class="row">
        <div class="col-md-3 bg-primary">
            <img  src="http://www.ausiasmarch.net/sites/default/files/logo_blanco_0.png"/>
        </div>
        <div class="col-md-6">
            <h2 class="text-primary text-center"><?php echo $title; ?></h2>
        </div>
    </div>
    
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="<?php echo $active=='home'?'active':'';?>"><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li role="presentation" class="<?php echo $active=='usuario'?'active':'';?>"><a href="<?php echo site_url(); ?>/usuario/add">Registro</a></li>
                    <li role="presentation" class=""><a href="./evento/add">Crear Evento</a></li>
                    <li role="presentation" class=""><a href="./evento/eventos_usuario>Mis Eventos</a></li>
                    <li role="presentation" class=""><a href="./evento/listado_eventos">Eventos</a></li>
                    <li role="presentation" class=""><a href="./evento/search">Buscador</a></li>
                    <li role="presentation" class=""><a href="./usuario/list">Usuarios</a></li>
                </ul>
            </div>
        </nav>    
    </div>