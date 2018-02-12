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
        $this->data['pagebody'] = 'view_catalog';
        $this->render();
    }

}