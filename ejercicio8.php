<?php
  
  /* 8. Determinar si un alumno aprueba a reprueba un curso, sabiendo que 
  aprobara si su promedio de tres calificaciones es mayor o igual a 70; 
  reprueba en caso contrario. */
  
    //readline es una función para entrada de datos en consola 

    $nota1 = readline("Ingrese su primera nota: ");
    $nota2 = readline("Ingrese su segunda nota: ");
    $nota3 = readline("Ingrese su tercera nota: ");

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    $nota = 10;

    $promedio2 = $promedio * 100 / $nota;



    if( $promedio2 >= 70 ){

    echo "\nEl promedio de notas del estudiante fue de :  $promedio,  Aprueba! \n\n";

     }

     else {
        echo "\nEl promedio de notas del estudiante fue de:  $promedio,  No aprueba! \n\n";
     }




  ?>