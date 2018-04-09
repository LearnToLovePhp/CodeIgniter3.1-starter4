<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sets extends Application
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
        if ($role == ROLE_USER || $role == ROLE_ADMIN)
        {
            $this->data['customize'] = '<a href="/customize"><input type="button" value="Customize your own pizza"/></a>';
            $this->data['edit'] = '<a href="/edit"><input type="button" value="Edit"/></a>';
        }
        else
        {
            $this->data['role'] = ROLE_GUEST;
            $this->data['customize'] = '';
            $this->data['edit'] = '';
        }
        $this->data['pagebody'] = 'equipment_sets';
        $this->data['pizzas'] = $pizzas;

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
