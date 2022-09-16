<?php

/* 2. Diseñar un procedimiento que me permita leer las notas de tres 
periodos de un estudiante y me saque el promedio de dichas notas y 
me imprima en pantalla. */

//readline es una función para entrada de datos en consola 

$nota1 = readline("Ingrese su primera nota: ");
$nota2 = readline("Ingrese su segunda nota: ");
$nota3 = readline("Ingrese su tercera nota: ");

$promedio = ($nota1 + $nota2 + $nota3) / 3;

 echo "\n El promedio de notas del estudiante fue de: \n $promedio \n "

?>