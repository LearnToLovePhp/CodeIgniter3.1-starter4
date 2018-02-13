<?php

class dough extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/dough.csv', 'ingrID');
    }
}