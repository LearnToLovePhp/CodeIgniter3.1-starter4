<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Ingredients');

        $ingredientList = $this->Ingredients->all();

        $bases = array();
        $sauces = array();
        $cheeses = array();
        $meats = array();
        $veg = array();

        //Populates each array with the respective ingredients
        foreach ($ingredientList as $ingredient) {
            switch ($ingredient->catID)
            {
                //catID = dough
                case 1:
                    array_push($bases, array(
                        "name" => $ingredient->name,
                        "type" => 'dough',
                        "price" => $ingredient->price,
                        "calories" => $ingredient->calories,
                        "img" => $ingredient->image)
                    );
                    break;
                //catID = sauce
                case 2:
                    array_push($sauces, array(
                        "name" => $ingredient->name,
                        "type" => 'sauce',
                        "price" => $ingredient->price,
                        "calories" => $ingredient->calories,
                        "img" => $ingredient->image)
                    );
                    break;
                //catID = cheese
                case 3:
                    array_push($cheeses, array(
                        "name" => $ingredient->name,
                        "type" => 'cheese',
                        "price" => $ingredient->price,
                        "calories" => $ingredient->calories,
                        "img" => $ingredient->image)
                    );
                    break;
                //catID = meat
                case 4:
                    array_push($meats, array(
                        "name" => $ingredient->name,
                        "type" => 'meat',
                        "price" => $ingredient->price,
                        "calories" => $ingredient->calories,
                        "img" => $ingredient->image)
                    );
                    break;
                //catID = veg
                case 5:
                    array_push($veg, array(
                        "name" => $ingredient->name,
                        "type" => 'veg',
                        "price" => $ingredient->price,
                        "calories" => $ingredient->calories,
                        "img" => $ingredient->image)
                    );
                    break;
            }
        }
        
        //pass data to view_catalog as each of their respective names
        $this->data['bases'] = $bases;
        $this->data['sauces'] = $sauces;
        $this->data['cheeses'] = $cheeses;
        $this->data['meats'] = $meats;
        $this->data['veg'] = $veg;

        $this->data['pagebody'] = 'view_catalog';
        $this->render();
    }

}
