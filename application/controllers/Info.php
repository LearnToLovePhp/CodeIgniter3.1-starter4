<?php


class Info extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = json_encode(array("scenario" => "Customize a Pizza"));

        $this->output->set_content_type('application/json');
        $this->output->set_output($data);
    }

    public function category($key = null)
    {
        $data = json_encode($this->categories->get($key));

        if(is_null($key))
        {
            $data = json_encode($this->categories->all());
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output($data);
    }

    public function ingredient($key = null)
    {
        $data = json_encode($this->ingredients->get($key));

        if(is_null($key))
        {
            $data = json_encode($this->ingredients->all());
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output($data);
    }

    public function pizza($key = null)
    {
        $tmp = $this->pizzas->get($key);


        $data = array();

//        $data['sauce'] = $this->ingredients->get($tmp->sauce);
//        $data['cheese'] = $this->ingredients->get($tmp->cheese);
//        $data['meat'] = $this->ingredients->get($tmp->meat);
//        $data['veg'] = $this->ingredients->get($tmp->veg);


        if(is_null($key))
        {
            $data = json_encode($this->pizzas->all());
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output($data);
    }
}