<?php

use PHPUnit\Framework\TestCase;

class pizzaTest extends TestCase
{
    private $CI;
    private $pizza;

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('pizza');
        $this->pizza = new pizza();
    }

    public function testSetPizzaID()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setPizzaID();

        $this->pizza->setPizzaID(5);
        $this->assertEquals($this->pizza->pizzaID, 5);
    }

    public function testSetNameEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setName();
    }

    public function testSetNameEquals()
    {
        $this->pizza->setName('Name');
        $this->assertEquals($this->pizza->name, 'Name');
    }

    public function testSetNameNotEquals()
    {
        $this->pizza->setName('Name');
        $this->assertNotEquals($this->pizza->name, 'Have you heard the tale of Darth Plagueis the Wise?');
    }

    public function testSetNameNumber()
    {
        $this->expectException('Exception');
        $this->pizza->setName('1234');
    }

    public function testSetSauceEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setSauce();
    }

    public function testSetSaucePass()
    {
        $this->pizza->setSauce('Pesto');
        $this->assertEquals($this->pizza->sauce, 'Pesto');
    }

    public function testSetSauceFail()
    {
        $this->pizza->setSauce('Pesto');
        $this->assertNotEquals($this->pizza->sauce, 'ASDF');
    }

    public function testSetCheeseEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setCheese();
    }

    public function testSetCheeseEqual()
    {
        $this->pizza->setCheese('Meat');
        $this->assertEquals($this->pizza->cheese, 'Meat');
    }

    public function testSetCheeseNotEqual()
    {
        $this->pizza->setCheese('Cheese');
        $this->assertNotEquals($this->pizza->cheese, 'Meat');
    }

    public function testSetCheeseNumber()
    {
        $this->expectException('Exception');
        $this->pizza->setCheese('123');
    }

    public function testSetMeat()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setMeat();
    }

    public function testSetMeatEqual()
    {
        $this->pizza->setMeat('Meat');
        $this->assertEquals($this->pizza->meat, 'Meat');
    }

    public function testSetMeatNotEqual()
    {
        $this->pizza->setMeat('Cheese');
        $this->assertNotEquals($this->pizza->meat, 'Meat');
    }

    public function testSetMeatNumber()
    {
        $this->expectException('Exception');
        $this->pizza->setMeat('123');
    }

    public function testSetVeg()
    {
        $this->expectException('ArgumentCountError');
        $this->pizza->setVeg();
    }

    public function testSetVegEqual()
    {
        $this->pizza->setVeg('Veg');
        $this->assertEquals($this->pizza->veg, 'Veg');
    }

    public function testSetVegNotEqual()
    {
        $this->pizza->setVeg('Cheese');
        $this->assertNotEquals($this->pizza->veg, 'Meat');
    }

    public function testSetVegNumber()
    {
        $this->expectException('Exception');
        $this->pizza->setVeg('123');
    }
}