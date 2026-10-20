
<?php
$a = 42;
$b = "42";
$c = 15.8;
$d = true;
$e = false;
$f = null;

echo "<h2>Types et valeurs</h2><pre>";
var_dump($a, $b, $c, $d, $e, $f);
echo "</pre>";

$entier = (int) $b;
$conversion = (int) $c;
$chaine = (string) $a;

echo "42 en entier : ";
var_dump($entier);

echo "15.8 en entier : ";
var_dump($conversion);

echo "42 en chaîne : ";
var_dump($chaine);

echo "<br>echo true : " . true;
echo "<br>echo false : " . false;

echo "<pre>";
var_dump(true, false);
echo "</pre>";

echo "<h3>Conversions booléennes</h3>";
var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);

?>
