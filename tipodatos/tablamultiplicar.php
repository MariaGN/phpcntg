
<h1>Tabla de multiplicar</h1>h1>
<table border=1>
	<tr>
		<td>*</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>2</td>
		<td>2</td>
		<td>4</td>
		<td>6</td>
	</tr>
	<tr>
		<td>3</td>
		<td>3</td>
		<td>6</td>
		<td>9</td>
	</tr>
</table>
	
	<?php
$columnas=4;
$filas=4;
$i;
print ("<table border=1>");
print ("<tr>");
for ($a=0;$a<=$filas; $a++){
	echo "<tr>";
	for ($i=1; $i<$columnas; $i++){
		if ($a==0 && $i==0)
			echo "<td></td>";
		elseif ($a==0)
			echo "<td>.$i.</td>";
		elseif($i==0)		
			echo "<td>".$a."</td>";
		else
			echo "<td>".$a*$i."</td>";
	}
	echo"</tr>";
}
print ("<\table>");