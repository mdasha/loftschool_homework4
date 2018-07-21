<?php
namespace Apps;
require_once "trait.php";

class Car {
	use Engine;
	use TransmissionAuto;
	use TransmissionManual;
	
	public $model;
	    public function __construct($model)
    {
        $this->model = $model;
    }
}


