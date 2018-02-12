<?php


class Ingredients extends CSV_Model {

    public function __construct() {
        parent::__construct('../data/ingredients.csv', 'ingrID');
    }
}