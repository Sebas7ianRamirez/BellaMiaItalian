<?php
require_once "config/config.php";
require_once "app/controllers/ControladorPedidos.php";

$controlador = new ControladorPedidos();
$controlador->mostrarPedidos();
?>
