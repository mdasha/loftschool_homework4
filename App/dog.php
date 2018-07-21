<?php
namespace App;
require_once "animal.php";
require_once "trait.php";

class Dog extends Animal implements Liking
{
	use Export;
    public function say($data)
    {
        echo $data;
        $this->expToCSV($data);
        $this->expToJSON($data);
    }
    public function like($owner)
    {
        echo PHP_EOL."<br>Я собака. Я лайкаю хозяина: ".$owner;
    }
}