<?php

class veg extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/veg.csv', 'ingrID');
    }
}