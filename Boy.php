<?php
class Boy extends Human
{
	private $dick;
	private $balls;

	public function __construct($name, $age, $dick, $balls)
	{
		parent :: __construct($name, $age);
		$this->dick = $dick;
		$this->balls = $balls;
	}
	public function getDick()
	{
		return $this->dick;
	}
	public function getBalls()
	{
		return $this->Balls;
	}
}
