<?php

 /* 5. Diseñar un algoritmo que me permita solicitar un número y este 
 indique cuantos dígitos tiene, el algoritmo indica hasta 4 dígitos y de 
 ahí en adelante que arroje un mensaje que diga demasiados dígitos.
 */

 //readline es una función para entrada de datos en consola 

 $numero = readline("Ingrese números: ");

 #strlen es una función para contar la longitud

 $contador = strlen($numero);
   
    echo(" \n Tiene $contador dígitos. \n");


 if ($contador > 4){
   
    echo ("\n Son demasiados digitos por Dios, yo solo te pedí un número.  \n ");
  
}

  else {

    echo ("\n¡Dame más numeros, no seas tacaño! \n"); 

  }

  
  
?> 