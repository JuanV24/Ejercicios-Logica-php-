<?php

$num = 2;

//Creamos la funcion de tipo booleano para evaluar un numero Primo
function EvaluaPrimos($num){
    //Validacion para descartar numeros menores o iguales a 1
    if ($num <= 1) {
        return false; 
    }

    /*Un for que ira iterando desde dos hasta la raiz cuadrada de un numero,
     si encuentra algun divisor devolvera un false para saber que no es numero primo*/
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
// Si no encontró divisores entonces el numero es primos
    return true; 
   
}

//Validacion para saber si el numero es primo o no 
if(EvaluaPrimos($num)){
    print("El numero es primo");
}else{
    print("El numero no es primo");
}
?>