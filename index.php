<?php

//valores string 
$name="fabian";
$lastName='Rayon';
//variables numericas
$age =23;
$size=1.90;
//varables booleanos 
$booleanTrue= true;
$booleanFalse=false;
//array
$array=[];
$arra=[10,'para ponerlo con valores el array']
//constantes (valores que no cambian )
const Constante_1 ='valor constante 1';
const Constante_2 =23;
//objetos
$objeto =new stdClass();
//clases
class auto{/*
    var $Color;
    string $marca;
    array $array ;
    bool $propiedadBoolean = false;
    $propiedadSinTIpoDeDato=[];*/
    int numerodepuertas=null;
    /*constructores

    public function_constructor(int $puertas){
        $this->numerodepuertas = $puertas;
    }
    public,private,protected
*/
    public function getDetails(string $time){
        //es el sout de php
        echo "time $time";
        echo "hola mundo";   
    }
// es lo mismo de arriba pero mas rapido 
    public function_constructor(public int $numerodepuertas){

    }
}
//intancias de clases 
$autoinstancia=new auto(4);

//ciclos
for($i =0;$i<10;$i++){
echo $i."\n";
}




?>