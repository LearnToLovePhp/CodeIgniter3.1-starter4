<?php

class meat extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/meat.csv', 'ingrID');
    }
}