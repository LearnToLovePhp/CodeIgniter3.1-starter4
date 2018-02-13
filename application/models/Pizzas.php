<?php

class Pizzas extends CSV_Model {

    public $pizzaID;

    public $name;

    public $sauce;

    public $cheese;

    public $meat;

    public $veg;
    
    function __construct() {
        parent::__construct(APPPATH . '../data/pizzas.csv', 'pizzaID', 'pizzas');
    }
}