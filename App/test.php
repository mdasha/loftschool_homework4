<?php
require("cat.php");
require("dog.php");
$animals = ['Dog', 'Cat'];
$randomanimal = 'App\\'.$animals[rand(0, 1)];
$cat = new $randomanimal('Васька');
$what = "Привет! Сто сорок восемь штиблет!";
$cat->sayHi($what);
$cat->expToCSV($what);
$cat->expToJSON($what);
$cat->expToCSV2($what);
$cat->expToJSON2($what);
$cat->like('маму Дашу');
?>