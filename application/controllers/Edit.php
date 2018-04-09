<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends Application
{

    /*
        The index for the sets page
        Sets is the home page
        It displays complete pizza sets
    */
	public function index()
	{
        $this->load->model('Pizzas');
        $this->load->helper('form');
        $pizza = $this->Pizzas->create();
        $this->data['id'] = $pizza->pizzaID;
        $pizzaList = $this->Pizzas->all();
        $pizzas = array();
        foreach($pizzaList as $pizza) {
            array_push($pizzas, $pizza->name);
        }

        // if no errors, pass an empty message
        if ( ! isset($this->data['error']))
            $this->data['error'] = '';

        $fields = array(
            'fname'      => form_label('Name') . form_dropdown('name', $pizzas, $pizza->name),
            'fsauce'     => form_label('Sauce') . form_dropdown('sauce', $this->app->sauce(), $pizza->sauce),
            'fcheese'    => form_label('Cheese') . form_dropdown('cheese', $this->app->cheese(), $pizza->cheese),
            'fmeat'      => form_label('Meat') . form_dropdown('meat', $this->app->meat(), $pizza->meat),
            'fveg'       => form_label('Veg') . form_dropdown('veg', $this->app->veg(), $pizza->veg),
            'zsubmit'    => form_submit('submit', 'Save'),
        );
        $this->data = array_merge($this->data, $fields);

        $this->data['pagebody'] = 'edit';
        $this->render();
    }
        
    function submit()
    {
        $this->load->model('Pizzas');
        $pizzaList = $this->Pizzas->all();
        $id = 1;
        
        // retrieve & update data transfer buffer
        $pizza = (array) $this->session->userdata('pizza');
        $pizza = array_merge($pizza, $this->input->post());
        $pizza = (object) $pizza;  // convert back to object
        $this->session->set_userdata('pizza', (object) $pizza);
        $pizza->base = 1;
        // validate away
        foreach($pizzaList as $pizzaData) {
            if (strcmp($pizzaData->name,$pizza->name))
            {
                $id = $pizzaData->pizzaID;
                $pizza->name = $pizzaData->name;
            }
        }

        $pizza->pizzaID = $id;
        $this->Pizzas->add($pizza);
        redirect('/sets');
    }

}

