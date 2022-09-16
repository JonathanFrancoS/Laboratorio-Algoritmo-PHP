<?php

/* 3. Diseñar un algoritmo que calcule el salario de total a recibir de un 
empleado, el usuario debe ingresar los datos de la información de las 
horas trabajadas y el costo de la hora laboral. */

//readline es una función para entrada de datos en consola 

$valorHora = readline ("Ingrese el costo de la hora laboral: ");

$horasTrabajadas = readline ("Ingrese el numero de horas trabajadas: ");

$sueldoTotal = $valorHora * $horasTrabajadas;
 
 echo("\n El salario total a recibir el empleado es de $$sueldoTotal pesos. \n ")
   
?>
