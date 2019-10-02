<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    setcookie('nombre', $nombre, time() + 3600);
    echo "Hola " . $_POST['nombre'];
} else {
    echo "Hola, no sé quien eres";
}

// echo "<hr>";
// var_dump($_POST);
// echo "<hr>";
// var_dump($_COOKIE);

//<input value="<?php echo $nombre; ...
