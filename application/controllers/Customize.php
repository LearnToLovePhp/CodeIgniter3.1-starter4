<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customize extends Application
{

    /*
        The index for the sets page
        Sets is the home page
        It displays complete pizza sets
    */
	public function index()
	{
        $this->load->model('Pizzas');
        $this->load->model('Ingredients');
        
        $pizzaList = $this->Pizzas->all();
        $ingredientList = $this->Ingredients->all();
        $pizzas = array();
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
        foreach($pizzaList as $pizza) {
            array_push($pizzas, array(
                "name" => $pizza->name,
                "pizzaID" =>$pizza->pizzaID,
                "base" => 'dough',
                "baseImg" => 'img/dough.png',
                "sauce" => $ingredientList[$pizza->sauce]->name,
                "sauceImg" => $ingredientList[$pizza->sauce]->image,
                "cheese" => $ingredientList[$pizza->cheese]->name,
                "cheeseImg" => $ingredientList[$pizza->cheese]->image,
                "meat" => $ingredientList[$pizza->meat]->name,
                "meatImg" =>$ingredientList[$pizza->meat]->image,
                "veg" => $ingredientList[$pizza->veg]->name,
                "vegImg" => $ingredientList[$pizza->veg]->image,
                "totalCost" => $this->getTotalCost($pizza, $ingredientList),
                "totalCalories" => $this->getTotalCalories($pizza, $ingredientList)
            ));


        }
        
        
        $role = $this->session->userdata('userrole');
        $this->data['role'] = $role;
        $this->data['pagebody'] = 'customize';
        $this->data['bases']    = $bases;
        $this->data['baseImg']  = 'img/dough.png';
        $this->data['sauces']   = $sauces;
        $this->data['cheeses']  = $cheeses;
        $this->data['meats']    = $meats;
        $this->data['veg']      = $veg;

		$this->render(); 
    }
    
    public function getTotalCost($pizza, $ingredientList)
    {
        $totalCost = 0;
        //base
        $totalCost += 5;
        //sauce
        $totalCost += $ingredientList[$pizza->sauce]->price;
        //cheese
        $totalCost += $ingredientList[$pizza->cheese]->price;
        //meat
        $totalCost += $ingredientList[$pizza->meat]->price;
        //veg
        $totalCost += $ingredientList[$pizza->veg]->price;

        return $totalCost;
    }

    public function getTotalCalories($pizza, $ingredientList)
    {
            $totalCalories = 0;
            //base
            $totalCalories += 5;
            //sauce
            $totalCalories += $ingredientList[$pizza->sauce]->calories;
            //cheese
            $totalCalories += $ingredientList[$pizza->cheese]->calories;
            //meat
            $totalCalories += $ingredientList[$pizza->meat]->calories;
            //veg
            $totalCalories += $ingredientList[$pizza->veg]->calories;
        
        return $totalCalories;
    }

}
