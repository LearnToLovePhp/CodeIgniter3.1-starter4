<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Ingredients');
		$this->load->model('Categories');
		
        $ingredientList = $this->Ingredients->all();

		$categories = $this->Categories->all();
        $bases = array();
        $sauces = array();
        $cheeses = array();
        $meats = array();
        $veg = array();

		$baseName = $categories["01"]->catName;
		
		
        //Populates each array with the respective ingredients
        foreach ($ingredientList as $ingredient) {
            switch ($ingredient->catID)
            {
                //catID = dough
                case 1:
                    array_push($bases, array(
						"ingrID" => $ingredient->ingrID,
						"catID" => $ingredient->catID,
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
						"ingrID" => $ingredient->ingrID,
						"catID" => $ingredient->catID,
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
						"ingrID" => $ingredient->ingrID,
						"catID" => $ingredient->catID,
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
						"ingrID" => $ingredient->ingrID,
						"catID" => $ingredient->catID,
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
						"ingrID" => $ingredient->ingrID,
						"catID" => $ingredient->catID,
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
        $role = $this->session->userdata('userrole');
        $this->data['role'] = $role;
        $this->data['bases'] = $bases;
        $this->data['sauces'] = $sauces;
        $this->data['cheeses'] = $cheeses;
        $this->data['meats'] = $meats;
        $this->data['veg'] = $veg;
		$this->data['baseName'] = $baseName;
		
		//This will send you back to the regular catalog page if you suddenly become not admin
		$role = $this->session->userdata('userrole');
        $this->data['role'] = $role;
        if ($role != ROLE_ADMIN) {
            $this->load->helper('url');
			redirect('/catalog', 'refresh');
		}

        $this->data['pagebody'] = 'maintenance';
        $this->render();
    }

	//This changes the attribute of the items
	public function changeItem()
	{
		$role = $this->session->userdata('userrole');
		
		if ($role != ROLE_ADMIN)
		{
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}
		
		$this->load->model('ingredients');
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->ingredients->rules());
		
		$item = $this->input->post();
		$item = (object) $item;  // convert back to object
		
		// validate away
		if ($this->form_validation->run())
		{
			$this->ingredients->update($item);
		} 
		redirect('/maintenance');
	}
}
