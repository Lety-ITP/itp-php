<?php
/**
* comentario de varias lineas
*/
$message = "hola mundo";

echo "$message\n";

define ('PUBLISHER', 'Springer');

echo PUBLISHER;

$pi = 0.0314E2;

echo "\n$pi";

echo '\n$pi'; // en el caso de utilizar comilla simple o apostrofe despliega el contenido entre ellas y no el valor de una variable

$people = ['Luis', 'Misraim', 'Noe', 1234, false, [2]];
$old = array(2,3,4);

print_r($people);

$product = [
	'name' => 'Ajax',
	'price' => 230,
	'available' => true,

];

foreach ($product as $field => $value)
{
	echo "\n$field: $value";
}

echo "\n Este es el precio del producto{$product['price']}\n";
echo $product['name'];

print_r($product);
print_r($old);
print_r($people);

//variables variables
$foo = 'bar';
$$foo = 'baz';

$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable .= '  Rocks! ';
echo "Short is $short";
echo "Long is $bigVariable";


function update_counter()
{
	global $counter;
	$counter++;
}
$counter = 10;
update_counter();
echo $counter;

var_dump('10' == 10);

var_dump('5'. 5);
var_dump('2'+ 2);

$password = 'Letmein';
if ($password === 'letmein') 
{
	echo 'Password is correct';
} else {
	echo 'Try again';
}

$color = 'red';
switch ($color) 
{
	case 'green':
		echo 'Green';
		break;
	case 'blue':
		echo 'Blue';
		break;
	default:
		echo $color;
}

function test()
{
	$parameter1 = 'foo';
	$parameter2 = 'bar';
	if ($parameter1 ==='baz')
	{
		die('Terminate script');
	}
	return "\n$parameter1 $parameter2";
}
//return 'Luis';
echo test();
exit(0);

$configuration = require 'configuration.php';  //reguiere: llama a un archivo... si no lo encuentra interrumpe ejecución
print_r($configuration);


	









?>