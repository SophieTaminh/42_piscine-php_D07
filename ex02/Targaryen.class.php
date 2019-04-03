<?php

class Targaryen
{
	function __construct()
	{
		return;
	}

	function  __destruct()
	{
		return;
	}

	public function resistsFire()
	{
		//return False:
	}

	public function getBurned()
	{
		if ($this->resistsFire()== true)
		{
			$this->daenerys = "emerges naked but unharmed";
			return ($this->daenerys);
		}
		else
		{
			$this->viserys = "burns alive";
			return($this->viserys);
		}	
	}	
}
?>