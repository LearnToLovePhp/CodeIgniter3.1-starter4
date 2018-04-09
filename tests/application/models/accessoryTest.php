<?php

use PHPUnit\Framework\TestCase;

class accessoryTest extends TestCase
{
    private $CI;

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('accessory');
        $this->accessory = new Accessory();
    }

    public function testSetIngrIDEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->accessory->setIngrID();
    }

    public function testSetIngrIDEqual()
    {
        $this->accessory->setIngrID('123123');
        $this->assertEquals($this->accessory->ingrID, '123123');
    }

    public function testSetIngrIDNotEqual()
    {
        $this->accessory->setIngrID('123123');
        $this->assertNotEquals($this->accessory->ingrID, 'I see through the lies of the Jedi');
    }

    public function testSetCatIDEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->accessory->setCatID();
    }

    public function testSetCatIDEqual()
    {
        $this->accessory->setCatID('1');
        $this->assertEquals($this->accessory->catID, '1');
    }

    public function testSetCatIDNotEqual()
    {
        $this->accessory->setCatID(2);
        $this->assertNotEquals($this->accessory->catID, 1);
    }

    public function testSetPizzaNameEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->accessory->setName();
    }

    public function testSetPizzaNameEqual()
    {
        $this->accessory->setName('Peppernono');
        $this->assertEquals($this->accessory->name, 'Peppernono');
    }

    public function testSetPizzaNameNotEqual()
    {
        $this->accessory->setName('Pepperyesyes');
        $this->assertNotEquals($this->accessory->name, 'Peppernono');
    }

    public function testSetPizzaNameInvalid()
    {
        $this->expectException('Exception');
        $this->accessory->setName('123123123');
    }

    public function testSetPriceEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->accessory->setPrice();
    }

    public function testSetPriceValid()
    {
        $this->accessory->setPrice(14);
        $this->assertEquals($this->accessory->price, 14);
    }

    public function testSetPriceNegative()
    {
        $this->expectException('Exception');
        $this->accessory->setPrice(-1);
    }

    public function testSetPriceInvalid()
    {
        $this->expectException('Exception');
        $this->accessory->setPrice('asdf');
    }

    public function testSetPriceOverMax()
    {
        $this->expectException('Exception');
        $this->accessory->setPrice(9999);
    }

    public function testSetCaloriesEmpty()
    {
        $this->expectException('ArgumentCountError');
        $this->accessory->setCalories();
    }

    public function testSetCaloriesValid()
    {
        $this->accessory->setCalories(1500);
        $this->assertEquals($this->accessory->calories, 1500);
    }

    public function testSetCaloriesInvalid()
    {
        $this->expectException('Exception');
        $this->accessory->setCalories('asdf');
    }

    public function testSetCaloriesNegative()
    {
        $this->expectException('Exception');
        $this->accessory->setCalories(-1);
    }

    public function testSetCaloriesOverMax()
    {
        $this->expectException('Exception');
        $this->accessory->setCalories(9999);
    }
}