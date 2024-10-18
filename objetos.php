<?php

class Autos{
    public $marca;
    public $modelo;
    public $color;

    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this -> modelo = $modelo;
        $this -> color = $color;
    }

    function mostrar(){
        echo($this -> marca." ".$this -> modelo." ".$this -> color);
    }

    static function mensaje(){
        echo "Gracis por visitar el concesarionario";
    }
}

$Auto1 = new Autos('totoya','supra','negro');
$Auto1 -> mostrar();
print_r('<br>');
Autos::mensaje();

?>