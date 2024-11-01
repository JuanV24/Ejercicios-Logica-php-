<?php
//Inicializamos el parametro
$n=10;

function fibonnaci($n){
    //Inicializando variables 
    $num1 = 0 ;
    $num2 = 1;
//Creando un bucle para poder generar los numeros 
for ($i=0; $i < $n ; $i++) { 
    //Realizamos la suma
    $Numnext = $num1 +  $num2;
    
    //Imprimimos nuestro numero generado 
    print("{$Numnext}, ");

    //Realizamos el intermacio de datos
    $num1 = $num2;
    $num2 = $Numnext;
}

}

//Imprimimos la funcion y enviamos el parametro
echo fibonnaci($n);



?>