<?php
require_once "app/models/ModeloPedido.php";

class ControladorPedidos {
    public function mostrarPedidos() {
        $pedidos = ModeloPedido::obtenerPedidos();
        require "app/views/vista_pedidos.php";
    }
}
?>
