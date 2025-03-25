<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <table border="1">
        <tr><th>ID</th><th>Mesa</th><th>Estado</th></tr>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $pedido['id'] ?></td>
                <td><?= $pedido['mesa'] ?></td>
                <td><?= $pedido['estado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
