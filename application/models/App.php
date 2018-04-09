<?php

/**
 * Domain-specific lookup tables
 */
class App extends CI_Model
{

	// task flags
	private $sauce = [
		2 => 'tomato',
        3 => 'pesto'
	];
	// task groups
	private $cheese = [
		4	 => 'mozzarella',
		5	 => 'cheddar',
	];
	// task priorities
	private $meat = [
		6	 => 'pepperoni',
		7	 => 'sausage',
	];
	// task sizes
	private $veg = [
		8	 => 'mushroom',
		9	 => 'pepper',
	];

	public function __construct()
	{
		parent::__construct();
	}

  public function sauce($which = null) {
  return isset($which) ?
    (isset($this->sauce[$which]) ? $this->sauce[$which] : '') :
    $this->sauce;
  }

  public function cheese($which = null) {
  return isset($which) ?
    (isset($this->cheese[$which]) ? $this->cheese[$which] : 'Unknown') :
    $this->cheese;
  }

  public function meat($which = null) {
  return isset($which) ?
    (isset($this->meat[$which]) ? $this->meat[$which] : 'Unknown') :
    $this->meat;
  }

  public function veg($which = null) {
  return isset($which) ?
    (isset($this->veg[$which]) ? $this->veg[$which] : 'Unknown') :
    $this->veg;
  }
}
