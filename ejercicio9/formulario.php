<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_COOKIE['nombre'])) {
    $nombre = $_COOKIE['nombre'];
} else {
    $nombre = "";
}
?>
<body>
    <form action="respuesta.php" method="post">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre" value="
        <?php echo $nombre; ?>
        ">
        <br>
        <input type="submit">
    </form>
</body>
</html>