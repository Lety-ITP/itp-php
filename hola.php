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

echo "\n Este es el precio del producto{$product['price']}\n";
echo $product['name'];

print_r($product);
print_r($old);
print_r($people);



?>