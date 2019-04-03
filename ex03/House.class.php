<?php

abstract class House
{
	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();

	function __construct()
	{
		return;

	}

	function  __destruct()
	{
		return;
	}

	public function introduce()
	{
		Print("House ");
		Print($this ->getHouseName());
		Print(" of ");
		Print($this ->getHouseSeat());
		Print(" : \"");
		Print($this ->getHouseMotto());
		Print("\"". PHP_EOL);
	}	
}
?>