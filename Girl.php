<?php
class Girl extends Human
{
	private $boobs;
	private $butt;

	public function __construct($name, $age, $boobs, $butt)
	{
		parent :: __construct($name, $age);
		$this->boobs = $boobs;
		$this->butt = $butt;
	}
	public function getBoobs()
	{
		return $this->boobs;
	}
	public function getButt()
	{
		return $this->Butt;
	}
}