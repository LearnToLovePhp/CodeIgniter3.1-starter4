<?php

class categories extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/categories.csv', 'catID');
    }
}