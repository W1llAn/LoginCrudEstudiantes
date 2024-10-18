<?php

$Numero = 20;
$Numero2 = 50;
$resultado = $Numero + $Numero2;
print_r($resultado);
var_dump($resultado);

print_r('<br>');

$cadena = "Hola";

print_r($cadena);
var_dump($cadena);

print_r('<br>');

$condicion = true;

print_r($condicion);
var_dump($condicion);

print_r('<br>');

$vector = array("Lunes","Martes","Miercoles");
print_r($vector);
var_dump($vector);

print_r('<br>');

//Array con propiedades
$frutas = array('fruta1'=>"manzanas",'fruta2'=>"peras");
print_r($frutas['fruta1']);

print_r('<br>');
//como objetos
$persona =(object)["nombre"=>"Carlos","Apellido"=>"nunez"];
print_r($persona -> nombre);
echo($persona -> nombre);

print_r('<br>');

function saludo(){
    echo "Hola como estas";
}

saludo();

print_r('<br>');

function despedida($mensaje){
    echo $mensaje;
}
despedida("Hello world");

print_r('<br>');

function retorno($retornar){
    return $retornar;
}

$prueba = retorno(1);
echo $prueba;

//marca modelo y color, metodo de impresion
$carro = (object)["marca"=>'Totoya',"modelo"=>"supra","color"=>"negro"];
$carro2 = (object)["marca"=>'Ford',"modelo"=>"raptor","color"=>"negro"];

function imprimir($auto){
    print_r('<br>');
    echo($auto -> marca." ".$auto->modelo);
    print_r('<br>');
    echo($auto -> modelo);
    print_r('<br>');
    echo($auto -> color);
}
imprimir($carro);
print_r('<br>');
imprimir($carro2);

?>