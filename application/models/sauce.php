<?php

class sauce extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/sauce.csv', 'ingrID');
    }
}