<h1> Serie de Fibonacci</h1>
F=0,1,1,2,3,5,8,13,21
<hr/>
<?php
$max=22;
echo "F=0,1,";
$n0=0;
$n1=1;
$n2=$n0+$n1;
while ($n2<$max){
	echo $n2.",";
	$n0=$n1;
	$n1=$n2;
	$n2=$n0+$n1;
}

/*meu. non valido
for($i=0;$i<=22;$i++){
	echo $F=($i++)+($i-1);
}
*/