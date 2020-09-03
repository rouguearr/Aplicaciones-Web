<?php

#1.  Se desea calcular la distancia recorrida (m), por un carro que tiene una velocidad constante (m/s), durante un tiempo determinado (sg) D = V*T

	$distancia;
	$velocidad = 100;
	$tiempo = 3000;



	$distancia = $velocidad * $tiempo;

	echo "la distancia que se recorre con una velocidad de ".$velocidad."m/s y un tiempo de ".$tiempo."seg fue de ".$distancia."m";
	echo "<br>";
	echo "<br>";

#2.  Algoritmo para calcular el área de un triangulo
	$base = 2;
	$altura = 16;
	$area = $base*$altura;
	$area = $area/2;

	echo "el area de un triangulo cuya altura es de ".$altura." y con una base de ".$base." es de ".$area;
	echo "<br>";
	echo "<br>";

	#3. Se requiere un algoritmo para calcular el sueldo mensual de un empleado,  basado en su tarifa por hora y las horas trabajadas en el mes

	$tarifaHora = 10;
	$horasdiarias = 8;
	$sueldoMensual = ((10*8)*7)*4;
	echo "El salario de un empleado que gana $".$tarifaHora." dolares por hora y trabaja ".$horasdiarias." horas diarias, es de $".$sueldoMensual." mensual";
	echo "<br>";
	echo "<br>";

	#4. Se necesita obtener el promedio en el curso de aplicaciones web  de un estudiante a partir  de la calificación obtenida en de cada una de las 3 unidades
	$unidad1 = 8;
	$unidad2 = 10;
	$unidad3 = 8;
	$promedio = ($unidad1+$unidad2+$unidad3)/3;
	echo "Calificaciones unidad1 ".$unidad1.", unidad2 ".", unidad3 ".$unidad3;
	echo "El promedio del alumno es ".$promedio;

?>