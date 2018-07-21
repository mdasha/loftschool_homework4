<?php
namespace Apps;
require_once "car.php";
require_once "trait.php";

class Niva extends Car {
	
	public function task($horsepower, $distance, $speed, $direction, $transmissiontype)
   {
	   // Машина
		$task = $task. '<h2>Машина и задача</h2><p><b>Марка машины</b>: <b>'.$this->model.'</b><br><br><b>Опции</b>:';
		
		// Опции: сиденье с подогревом и руль (левый или правый)
		$a = rand(0, 1);
		
		if ($a) {
			$task = $task. '<br>Правый руль';
		} else {
			$task = $task. '<br>Левый руль';			
		}
		$task = $task. '<br>Сиденье с подогревом для водителя<br>';
		
		//Задача
		 $task = $task.'<br><b>Задание</b>: двигаться <b>' .$distance. 'м</b>, со скоростью <b>' .$speed. 'м/с</b><b>, ' .$direction. '</b><br></p>'
		 
		//Двигатель (включение, охлаждение, выключение)
		 . $this->engine($horsepower, $distance, $speed);

		//Поведение в зависимости от коробки передач
		if ($transmissiontype==="auto") {
			$task = $task. $this->transmissionauto($direction);
		}	elseif ($transmissiontype==="manual") {
			$task = $task. $this->transmissionmanual($direction, $speed);
		}	
		return $task;
	}
}

$niva = new Niva("Нива");
echo $niva->task (200, 2550, 120,'вперед', 'manual');

