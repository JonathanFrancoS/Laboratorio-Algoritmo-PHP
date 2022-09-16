<?php

 /* 1. Realizar un procedimiento que realice las operaciones de suma, resta, 
 multiplicación y división dado dos números introducidos por el usuario */
 
 # Calculadora Sencilla  
  
   #$num1=2;
   #$num2=2;
    
    //readline es una función para entrada de datos en consola 
    
    $num1 = readline("Introducir numero: ");
    $num2 = readline("Introducir numero: ");
  
  // Suma de las variables
 
    $suma = $num1 + $num2 ;
 
  // Multiplica las variables
 
    $multiplicacion = $num1 * $num2;
 
  // Resta las Variables 
 
    $resta = $num1 - $num2;
  
  // Divide las variables
  
    $division = $num1 / $num2;
  
 
    echo "\n El resultado de la suma del primer numero que es $num1 con el segundo numero $num2 es de $suma,
    \n el de la resta es de $resta,
    \n el de la multiplicación es de $multiplicacion \n\n y el resultado de la division es de $division. \n\n";  
    
?>