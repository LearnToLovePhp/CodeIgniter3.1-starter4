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
}