<?php

$num1=mt_rand()*99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; //Genero el primer aleatorio
$num2=mt_rand()*9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; //Segundo aleatorio..
$tiempos = array();
$elresultado=$num1*$num2;
echo "El numero 1 es $num1";?><br><?php

echo "El numero 2 es $num2";?><br><?php

echo "El resultado de la multiplicacion debe de ser $elresultado";?><br><?php





for ($i = 1; $i <= 100; $i++){  //esta vuelta es para hacer 100 veces cada suma
	



	$tiempo1=microtime_float();
	//echo "<br>el time 1 es $tiempo1";
    //echo "<br>La multiplicacion da total es"; echo multprusa($num1,$num2);//mando los parametros a la funcion e imprimo
	//sleep(1);
	$tiempo2=microtime_float();
	//echo "<br>el time 2 es $tiempo2";
	$tiemporeal=$tiempo2-$tiempo1;
	//echo "<br>el tiempo total $tiemporeal";
	echo number_format($tiemporeal, 25);
	echo "<br>";

}

function microtime_float()
{
list($useg, $seg) = explode(" ", microtime());
return ((float)$useg + (float)$seg);
}
	

	function multprusa($x, $y) {

		$izquierda = array();

		$derecha = array();

		

		while ($x > 1) {

			$izquierda[] = $x;
			$derecha[] = $y;

			$x = floor($x / 2);
			$y *= 2;

		}

		
		$izquierda[] = $x;
		$derecha[] = $y;
		$resultado = 0;

		
		foreach ($izquierda as $index => $x) if ($x % 2) {

			$resultado = $resultado+$derecha[$index];

		}

		return $resultado;

	}





	

?>
