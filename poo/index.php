<?php

class App  
{
    public $nombre;
    public $apellido;
    
    public function __construct($nombre, $apellido)
    {
        echo "Creando un App";
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
}

$app = new App('Rafa', 'Cabeza');

$app->poo(); //funciona pero poco correcto
App::poo(); //método estático
$app->saludar(); //
echo App::class;
