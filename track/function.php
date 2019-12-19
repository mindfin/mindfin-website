<?php

	function encrypt($dato) {
	$result = $dato;
	$arrayLetras = array('M', 'A', 'R', 'C', 'O', 'S');
	$limite = count($arrayLetras) - 1;
	$num = mt_rand(0, $limite);
	for ($i = 1; $i <= $num; $i++) {
		$result = base64_encode($result);
	}
	$result = $result . '+' . $arrayLetras[$num];
	$result = base64_encode($result);
	return $result;
}

function decrypt($dato) {
	$result = base64_decode($dato);
	list($result, $letra) = explode('+', $result);
	$arrayLetras = array('M', 'A', 'R', 'C', 'O', 'S');
	for ($i = 0; $i < count($arrayLetras); $i++) {
		if ($arrayLetras[$i] == $letra) {
			for ($j = 1; $j <= $i; $j++) {
				$result = base64_decode($result);
			}
			break;
		}
	}
	return $result;
}
?>