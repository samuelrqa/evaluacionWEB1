<?php
echo "<b>TALLER 1 - WEB I<br>SAMUEL RICARDO QUINTERO AGUDELO<br>GRUPO 1 - ACDI/VOCA</b><br><br>";

echo "<br><b>EJERCICIO 1: Operaciones aritméticas</b><br>";

/*Mostrar en pantalla la suma, resta, multiplicación y división
de dos números enteros almacenados en 2 variables diferentes.*/

$num1 = 13;
$num2 = 5;

echo "<br>La suma de " . $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "<br>";
echo "La resta de " . $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "<br>";
echo "La multiplicación de " . $num1 . " x " . $num2 . " = " . ($num1 * $num2) . "<br>";
echo "La división de " . $num1 . " / " . $num2 . " = " . ($num1 / $num2) . "<br>";
echo "------------------------------------------------------------------------------------------<br>";

echo "<br><b>EJERCICIO 2: BodyTech - IMC</b><br>";

/*El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a
sus usuarios calcular el índice de masa corporal: IMC = peso / altura * altura.
La clasificación del IMC, es la siguiente:
IMC <= 18.4 --> Insuficiencia de peso
18.5 <=IMC <= 24.9 --> Peso normal
25 <=IMC <= 29.9 --> Sobrepeso
30 <=IMC <= 34.9 --> Obesidad 1
35 <=IMC <= 39.9 --> Obesidad 2
IMC >= 40 --> Obesidad 3 */

$peso = 55;
$altura = 1.67;

$imc = round($peso / ($altura * $altura), 1);
echo "<br>Índice de masa corporal: " . $imc . "<br>";
echo "<b>Clasificación:</b> ";

if ($imc <= 18.4)
  echo "Insuficiencia de peso<br>";
elseif ($imc <= 24.9)
  echo "Peso normal<br>";
elseif ($imc <= 29.9)
  echo "Sobrepeso<br>";
elseif ($imc <= 34.9)
  echo "Obesidad 1<br>";
elseif ($imc <= 39.9)
  echo "Obesidad 2<br>";
else
  echo "Obesidad 3<br>";

echo "------------------------------------------------------------------------------------------<br>";

echo "<br><b>EJERCICIO 3: Spring Step - Descuento venta al por mayor</b><br>";

/*La tienda Spring Step tiene una promoción de descuento para vender al mayor, esta dependerá del
número de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de
la compra si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un
20% de descuento y si son más 5 pares de zapatos se otorgará un 40% de descuento. Defina la cantidad
de variables que necesite, el precio de cada par de zapatos es $150000 y establezca el valor total de
una compra de 5 pares de zapatos*/

$cant = 5;
$vrPar = 150000;
$vrCompra = $cant * $vrPar;
$desc = 0;
$totalPagar;

if ($cant == 3)
  $desc = $vrCompra * 0.1;
elseif ($cant > 3 && $cant <= 5)
  $desc = $vrCompra * 0.2;
elseif ($cant > 5)
  $desc = $vrCompra * 0.4;

$totalPagar = $vrCompra - $desc;

echo "<br>El descuento por la compra de " . $cant . " pares de zapatos es de $" . $desc . "<br>";
echo ("El valor total de la compra es $" . $totalPagar . "<br>");
echo "------------------------------------------------------------------------------------------<br>";

echo "<br><b>EJERCICIO 4: Salario semanal</b><br>";

/*Un trabajador de Postobón desea saber cuál será su sueldo semanal, se sabe que si trabaja 40 horas o menos, se le pagará
$20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora. Ejecute su
código para calcular el salario con 36 horas trabajadas*/

$horasTrabajadas = 36;
$horasExtra = 0;
$salario;

if ($horasTrabajadas > 40)
  $horasExtra = $horasTrabajadas - 40;

if ($horasTrabajadas <= 40)
  $salario = $horasTrabajadas * 20000;
else
  $salario = 40 * 20000 + $horasExtra * 25000;

echo "<br>El trabajador facturó " . $horasTrabajadas . " horas en la semana, por lo que tiene " . $horasExtra . " horas extra.";
echo "<br>El salario semanal del trabajador es $" . $salario . "<br>";
echo "------------------------------------------------------------------------------------------<br>";

echo "<br><b>EJERCICIO 5: La Jugosa SAS</b><br>";

echo "<br><b>Salpicón</b><br>";

/*Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores
de dicha consulta en un arreglo denominado salpicón, el cual presenta la siguiente configuración:
[Dulce1] => "Banano"
[Dulce2] => "Manzana"
[Dulce3] => "Durazno"
[Ácido1] => "Piña"
[Ácido2] => "Naranja"
[Ácido4] => "Lulo"
Defina el arreglo salpicón e imprima utilizando un ciclo foreach el contenido de este*/

$salpicon = array(
  "Dulce1" => "Banano",
  "Dulce2" => "Manzana",
  "Dulce3" => "Durazno",
  "Ácido1" => "Piña",
  "Ácido2" => "Naranja",
  "Ácido4" => "Lulo"
);

foreach ($salpicon as $clave => $valor)
  echo $clave . ": " . $valor . "<br>";

  echo "------------------------------------------------------------------------------------------<br>";

?>