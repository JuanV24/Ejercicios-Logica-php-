<?php
//Inicializando nuestra palabra y la convertimos a mayusculas para evitar errores 
$palabra = "Arenera";
$palabraMayus = strtoupper($palabra);

//creamos nuestra función 
function Palindromo($palabra){
    
    //Por medio de la funcion strrev(propia de php) obtenemos la pabra pero al reves 
    $alreves = strrev($palabra);

    //Creamos una validacion para saber si nuestra palabra es estrictamente igual a la palabra alreves
    if($palabra === $alreves){
        print("La palabra es un palindromo\n");
        print($palabra."\n");
        print($alreves);
    }else{
        print("La palabra no es un palindromo");
    }
}
//Imprimimos nuestra funcion
print(Palindromo($palabraMayus));

?>
