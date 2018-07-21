<?php
namespace App;
require_once "trait.php";
//$animal = new Animal('Пухля');
//echo $animal->move();
//$animal->setSkills('кушать мясо, выполнять простые команды, облизывать хозяина');
//echo '<h1>Мои питомцы</h1>';
//echo '<h2>Моя собака</h2>';
//echo 'Имя: '.Animal::$names;
//echo '<br>Порода: '.Animal::getPoroda();
//echo '<br>Навыки: '.$animal->getSkills();
//echo $animal->sayHi('гав-гав'); 

class Animal
{
	use Export;
	use Export2;
	public static $names = 'Пухля';
    public $name;
	protected $poroda = "nyasha";
	private $skills = 'bite';
    public function __construct($name)
    {
        $this->name = $name;
    }
 public static function getPoroda()
 {
      return "Бульдог";
   }
public function getSkills()
 {
    return $this->skills;
  }
 public function setSkills($skills)
  {
      $this->skills = $skills;
	}
public function move()
   {
      echo "Что сделал вчера ". $this->name . ": походил";
	}
 public function sayHi($what = null)
 {
    if (!empty($what)) {
        echo "<br>Я говорю: ".$what;
   } else {
       echo "<br>Говорит: Бур-бур";
     }
  }
}
//namespace =>> class =>> function => variables