<?php
	$name="maria";
	$edad="22";
	$direccion=array('esa','lesende',23);
	$vacio=NULL;
	$deporte="FALSE";
	
	var_dump($name);
	var_dump($edad);
	var_dump($direccion);
	var_dump($vacio);
	
	echo "<hr/>";
	
	var_dump($direccion);
	
	echo "<pre>";
	print_r($direccion);
	echo "</pre>";
	
	echo "<hr/>";
	
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
	
	echo $_SERVER['DOCUMENT_ROOT'];
	
	echo $name[2];
	
	echo @name;
	
	echo 5<<2;
	
	require 'arraysfunctions.php';
	require 'arraysfunctions.php';