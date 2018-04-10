<?php
class Ingredients extends CSV_Model {

    public $ingrID;

    public $catID;

    public $name;

    public $price;

    public $calories;


    function __construct() {
        parent::__construct(APPPATH . '../data/ingredients.csv', 'ingrID', 'ingredients');
    }
	
	public function rules() {
	$config = array(
		['field' => 'ingrID', 'label' => 'ingrID', 'rules' => 'alpha_numeric'],
		['field' => 'catID', 'label' => 'catID', 'rules' => 'alpha_numeric'],
		['field' => 'name', 'label' => 'type', 'rules' => 'alpha_numeric'],
		['field' => 'price', 'label' => 'price', 'rules' => 'required|is_natural'],
		['field' => 'calories', 'label' => 'calories', 'rules' => 'required|is_natural'],
		['field' => 'image', 'label' => 'image', 'rules' => '']
	);
	return $config;
	}
}