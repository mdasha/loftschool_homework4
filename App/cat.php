<?php
namespace App;
require_once "animal.php";
require_once "trait.php";



class Cat extends Animal implements Liking
{
   use Export;
    public function sayHi($what = null)
    {
        parent::sayHi($what);
        echo "<br>Я котик...meow";
    }
 //   public function exp($data)
   // {
 //   }
 //   public function moveFile()
//    {
  //      $file = $_FILES['file'];
 //       if (!empty($file)) {
 //           print_r($file);
 //           move_uploaded_file($file['tmp_name'], "../images/" . $file['name']);
 //       }
//    }
public function like($what)
 {
    $a = rand(0, 1);
      if ($a) {
       echo "<br>Я котик и говорю: Мур";
     }
}
}

//$cat = New Cat('Васька');
//echo '<h2>Мой котик</h2>';
//echo 'Имя: '.$cat->name;
//$cat->setSkills('пить молочко, мурлыкать, ласкаться к хозяину');
//echo '<br>Навыки: '.$cat->getSkills();
//echo $cat->sayHi('Мурмяу');