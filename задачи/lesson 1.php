<?php
echo "Задача 1<br>";

$a = rand(0, 100);
$b = rand(0, 100);

echo "$a + $b = ". ($a +$b);

echo "<h2>Задача 2</h2><br>";

$str_one = "14445646";
$str_two = "oooo";

echo "$str_one + $str_two - " . $str_one . $str_two;

echo "<h3>Задача 2</h3><br>";


$type_animal = "fish";
$dog = "Шарик";
$cat = "Барсик";
$fish = "Немо";

if(isset($$type_animal)) {
    echo $$type_animal;
} else {
    echo "Erorr!!!";
}