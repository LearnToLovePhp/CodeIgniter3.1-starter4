<?php
class Pizza extends Entity
{
    protected $pizzaID;
    protected $name;
    protected $sauce;
    protected $cheese;
    protected $meat;
    protected $veg;

    // setters
    public function setPizzaID($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException("An ID must have a value");
        }

        $this->pizzaID = $value;
        return $this;
    }

    public function setName($value)
    {
        if (empty($value))
        {
            throw new Exception( "A name cannot be empty");
        }

        if (is_numeric($value))
        {
            throw new Exception("A pizza name cannot be a number");
        }

        $this->name = $value;
        return $this;
    }

    public function setSauce($value)
    {
        if (empty($value))
        {
            throw new Exception( "A sauce cannot be empty");
        }

        if (is_numeric($value))
        {
            throw new Exception("A sauce name cannot be a number");
        }

        $this->sauce = $value;
        return $this;
    }

    public function setCheese($value)
    {
        if (empty($value))
        {
            throw new Exception( "A cheese name cannot be empty");
        }

        if (is_numeric($value))
        {
            throw new Exception("A cheese cannot be a number");
        }

        $this->cheese = $value;
        return $this;
    }

    public function setMeat($value)
    {
        if (empty($value))
        {
            throw new Exception( "A meat type cannot be empty");
        }

        if (is_numeric($value))
        {
            throw new Exception("A meat name cannot be a number");
        }

        $this->meat = $value;
        return $this;
    }

    public function setVeg($value)
    {
        if (empty($value))
        {
            throw new Exception( "A veggie type cannot be empty");
        }

        if (is_numeric($value))
        {
            throw new Exception("A veggie name cannot be a number");
        }

        $this->veg = $value;
        return $this;
    }
}