<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<h1>Hola</h1>
<?php
#Para definir variables que pueda ser utilizada en todo el HTML se deben anteceder con $
$var1 = 20;
$booleano = false;

#Para imprimir en el HTML ocupamos echo
echo "<p> Las variables son:<br> Var1: $var1 <br> booleano: $booleano</p>";

#Control de flujo
if ($booleano){
    echo "<h4> Dentro del if: la variable era TRUE.</h4>";
} else {
    echo "<h4> Dentro del if: la variable era FALSE.</h4>";
}

#Looping. Hay varios tipos de looping. Investigar!
echo "<h3>For Loop:</h3>";
for($i = 0; $i<6; $i++) {
  echo "<p> i: $i </p>";
}

echo "<h3>Foreach Loop:</h3>";
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $v ) {
   echo "<p> Value is: $v </p>";
}
$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
);
// $array2['ewe'] = 'uwu'
?>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<?php foreach ($array2 as $key => $value): ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

</body>
</html>
