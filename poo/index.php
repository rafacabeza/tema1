<?php

class App  
{
    public $nombre;
    public $apellido;
    
    public function __construct($nombre, $apellido)
    {
        echo "Creando un App<br>";
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public static function poo()
    {
        echo "Ejemplos POO<br>";
    }
    public function saludar()
    {
        echo "Hola, me llamo $this->nombre<br>";
        // this.nombre >>> this->nombre;
        //atributos y métodos de objeto: 
        // $objeto->atributo
        // $objeto->metodo()
        // atributos de clase: estáticos
        // funciones de clase: estáticas
        // Clase::atributoEstatico
        // Clase::metodoEstatico()
        // Clase::constante
    }

    public function vista()
    {
        require('vista.php');
    }
}


$app = new App('Rafa', 'Cabeza');

if (isset($_GET['method'])) {
    $method = $_GET['method'];
} else {
    $method = 'saludar';
}


// $app->poo(); //funciona pero poco correcto
// App::poo(); //método estático
if (method_exists($app, $method)) {
    $app->$method();
} else {
    die('metodo no encontrado');    
    exit('3');
}
