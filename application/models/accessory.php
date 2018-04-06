<?php

class Accessory extends Entity {
    protected $ingrID;
    protected $catID;
    protected $name;
    protected $price;
    protected $calories;

    // setters
    public function setIngrID($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException("An Id must have a value");
        }

        $this->ingrID = $value;
        return $this;
    }

    public function setCatID($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException("An Id must have a value");
        }

        $this->ingrID = $value;
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
            throw new Exception("A pizza part name cannot be a number");
        }
        $this->name = $value;
        return $this;
    }

    // Pizza topping may be free
    public function setPrice($value)
    {
        if (!is_numeric($value))
        {
            throw new Exception("Price must be numeric");
        }

        if ($value < 0)
        {
            throw new Exception("A pizza part cannot have a negative price");
        }

        if ($value > 100)
        {
            throw new Exception("A pizza part may not be more than $100");
        }
        $this->price = $value;
        return $this;
    }

    public function setCalories($value)
    {
        if (!is_numeric($value))
        {
            throw new Exception("Calories must be numeric");
        }

        if ($value <= 0)
        {
            throw new Exception("Calories must have a positive value");
        }

        if ($value > 2000)
        {
            throw new Exception("Are you sure you want to eat this if it's > 2000 calories?");
        }

        $this->calories = $value;
        return $this;
    }
}