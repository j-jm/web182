<?php
$name = 'Jean-Jacques';
$break = '<br>'.'<br>'.'<hr>';


print $name;

$message = 'Hello '.$name . ', and this is a single quote.';
print $message. '<br>';

$message = "Hello $name, and this is a variable substitution."; '<br>';

$message = "How many {name}s";
print $message . '<br>';


$message = <<<HEREDOC
THIS IS MY MESSAGE,
not sure $name why all caps.
HEREDOC;
print $message;

$message = <<<'NOWDOC'
My message
with no variable sub.
NOWDOC;
print $message;

print $break;

$message = '\jean-jacques\' is using quotes.';
print $message;

$name = '';
if (empty($name)) {

	$message = 'Please provide your name';
	print $message; 
}

if (strlen($name)) {
	$message = 'Using string length';
	print $message;
}


print $break;

$phone = '555.555.5555';

$phone = '8282225555';

print $phone . '<br>';
$phone = str_replace('.', '-', $phone);
print $phone . '<br>';

$area_code = print substr($phone,0,3);
$central_office = print substr($phone,3,3);
$last_four = print substr($phone, -4, 4);

print $area_code . '<br>';
print $central_office . '<br>';
print $last_four . '<br>';


print  "($area_code) $central_office-$last_four";

$name = 'Jean-Jacques';
$vert_print = '';

for ($i = 0; $i < strlen($name); $i++) {
$vert_print .= substr($name, $i, 1);
$vert_print .= '<br>';
}
print '<br>';
print $name;
print '<br>';
print $vert_print;

$i = strpos($name, 'a');
print $i;
print '<br>';
$i = stripos($name, 'a');
print $i;
print '<br>';
$i = strrpos($name, 'a');
print '<br>';

$name = '	Jean-Jacques ';
print ltrim($name);
print '<br>';
print rtrim($name);
print '<br>';
print trim($name);
print '<br>';

str_pad($name, 4);
print '<br>';

print strtolower($name);print '<br>';
print strtoupper($name);print '<br>';

print str_shuffle($name);print '<br>';
print str_repeat($name,4);print '<br>';

$names = 'Kyle,John,Beth,Ben';
print $names;print '<br>';
$names = explode(',',$names);
print_r($names);print '<br>';
print $names[2];print '<br>';

print '<br>'. implode('|',$names);

# -----------------------------------------------------------------------
# math functions
print $break;

$age = 33;
$bank_account = -4000.5674;

print abs($bank_account);
print $break;

print ceil($bank_account);print $break;
print floor($bank_account);print $break;

print max(100,44,23,12);print $break;
print min(100,44,23,12);print $break;

print pi();print $break;

print rand(0,10);print $break;

print mt_rand(0,10);print $break;

print chr(165);print $break;



$age = (int) $age;
if ($age <34) {
	print 'It is an integer';
}


$age = (float) $age;

$animals = array(
	'cat' => fish,
	'dog' => cat,
	'deer' => grass,
	'lion' => elk
	);

print_r($array);print $break;
var_dump($array);print $break;

foreach($animals as $animal => $food) {
	print ucfirst($animal). "s like to eat ".ucfirst($food)."<br>";
}


?>
