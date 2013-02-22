<?php

$alumno=array('nombre'=>'maria',
		'apellidos'=>'gómez',
		'email'=>'ese@stio.es',
		'edad'=>12,
		'algo',
		'estudiante'=>TRUE,
		FALSE=> 'cosa',
		'algo mas',
		1.7=>'y este',
		6=>'mas aun',
		123,  //dado que a anterior é 6, sigue, por tanto valor 7 a non ser k existira un maior
		array('rojo','verde','naranja')
		
);
echo "<pre>";
print_r ($alumno);
echo"</pre>";


foreach($alumno as $key=>$value){
	echo $key.": ".$value;
	echo "<br/>";
}



/**
 * Recibe un array , de máximo 2 dimensiones ,
 * y lo muestra por pantalla.
 * 
 * @param array   Array de entrada
 * @return true;
 */

function muestraArray($array){
	
		foreach($array as $key=>$value){
			echo $key.": ";
			if(is_array($value)){
				
					echo implode (',',$value);
				}
			else{
				echo $value;
			}
				echo "<br/>";
		
		}
		return TRUE;
}
muestraArray($alumno);

/*
function muestraArray($array){

	foreach($array as $key=>$value){
		echo $key.": ";
		
		if(is_array($value)){
			foreach ($value => $value2){
				echo $value2.",";
			}
		}
		
		else{
			echo $value;
		}
		echo "<br/>";

	}
	return TRUE;
}


muestraArray($alumno);
*/
