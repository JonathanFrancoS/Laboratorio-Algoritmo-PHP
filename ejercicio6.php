<?php

  /* 6. Desarrolle un algoritmo que permita convertir calificaciones 
  numéricas, según la siguiente tabla: A = 19 y 20, B =16, 17 y 18, C =13, 14 y 15, D = 10, 11 y 12, E = 1 hasta el 9. Se asume que la nota 
  está comprendida entre 1 y 20. */

  //readline es una función para entrada de datos en consola 


  $calificacion = readline("Por favor ingrese el número de su nota: ");
   
  //Practica de un diccionario en PHP
   $notas= [
   0 => 'Ingrese un número de nota valida', 
   1 => 'E', 
   2 => 'E',
   3 => 'E',
   4 => 'E',
   5 => 'E',
   6 => 'E',
   7 => 'E',
   8 => 'E',
   9 => 'E',
   10 => 'D', 
   11 => 'D',
   12 => 'D',
   13 => 'C',
   14 => 'C',
   15 => 'C',
   16 => 'B',
   17 => 'B',
   18 => 'B',
   19 => 'A', 
   20 => 'A', 
   ];
   
    echo $notas [ $calificacion ];

?>