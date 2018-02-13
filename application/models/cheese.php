<?php

class cheese extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/cheese.csv', 'ingrID');
    }
}