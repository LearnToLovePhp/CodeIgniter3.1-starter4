<?php

class Categories extends CSV_Model {
    
    function __construct() {
        parent::__construct(APPPATH . '../data/categories.csv', 'catID', 'categories');
    }
}