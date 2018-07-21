<?php
namespace Apps;

// Двигатель
trait Engine {
	public function engine($horsepower, $distance, $speed) 
	{
		$engine = '<h2>Двигатель</h2><p><b>Мощность двигателя</b>: '.$horsepower. " лошадиных сил <br>(1 лошадиная сила позволяет развивать скорость 2 м/с)" ;
		$engine = $engine . '<p>Включаем двигатель<br>';
		
		$power = floor($horsepower*2);
		
		if ($power >= $speed) {
			$engine = $engine. "Для развития скорости " .$speed. " м/с мощности двигателя хватает. <br>";
			
			if ($distance > 10) {
				for ($i = 10; $i <= $distance; $i = $i+10) {
					$temp = $temp +5;
					if ($temp === 90) {
						$k = $k + 1;
						$engine = $engine. " ".$k. ". Проехали ".$i." м. Температура двигателя 90 градусов. Влючаем вентилятор.<br>";
						$temp = $temp - 10;
					}
				}
					$engine = $engine. 'Выключаем двигатель и коробку передач. Приехали.</p>';
			}
		} else {
			$engine = $engine. "Для развития скорости " .$speed. " м/с мощности двигателя не хватает. <br>";
			$engine = $engine. 'Выключаем двигатель и коробку передач. Ехать не можем, не хватает мощности.</p>';
		}
		return $engine;
	}
}

// Автоматическая коробка передач
trait TransmissionAuto {
	
	public function transmissionauto($direction) {
		
		$peredacha = "<h2>Передача</h2><p>Используем автоматическую передачу.<br>";
		
		if ($direction==="вперед") {
			$peredacha = $peredacha. "Включить передачу вперед.</p>";
	   } else {
			$peredacha = $peredacha. "Включить передачу назад.</p>";		   
	   }
	   return $peredacha;	
	}
}

// Ручная коробка передач
trait TransmissionManual {
		
		public function transmissionmanual($direction, $speed) {
		
		$peredacha = "<h2>Передача</h2><p>Используем ручную передачу.<br>";
		
		if ($direction==="вперед") {
			$peredacha = $peredacha. "Включить передачу вперед.<br>";
	   } else {
			$peredacha = $peredacha. "Включить передачу назад.<br>";		   
	   }
	   if ($speed > 20) {
		   $peredacha = $peredacha. "Включаем 2 передачу.</p>";
	   } else {
		   $peredacha = $peredacha. "Включаем 1 передачу.</p>";
	   }
	   return $peredacha;	
	}
}