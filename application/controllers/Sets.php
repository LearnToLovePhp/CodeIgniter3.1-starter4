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
		$this->data['pagebody'] = 'equipment_sets';
		$this->render(); 
	}

}
