<?php

if (isset($_REQUEST['lista'])) {
    $lista = $_REQUEST['lista'];
} else {
    $lista = array();
    // $lista = [];
}

if (isset($_REQUEST['nuevo'])) {
    $nuevo = $_REQUEST['nuevo'];
    $lista[] = $nuevo;
}

// echo "<pre>";
// var_dump($lista);
// var_dump($nuevo);
// echo "</pre>";

require "ejercicio7vista.php";