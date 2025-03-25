<?php
require_once "config/config.php";

class ModeloPedido {
    public static function obtenerPedidos() {
        global $conn;
        $result = $conn->query("SELECT * FROM pedidos");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
