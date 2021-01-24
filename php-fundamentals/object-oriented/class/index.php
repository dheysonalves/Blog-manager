<?php

class Person {
	public $name;
	public $age;

	// constructor($name, $age) {
	// 	$this->name = $name;
	// 	$this->age = $age;
	// }

	public function Speak() {
		echo $this->name . " of " .$this->age. " years old has spoken";
	}
}

$jack = new Person();

$jack->name = 'Jackie';
$jack->age = 25;
$jack->Speak();

