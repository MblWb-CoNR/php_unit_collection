<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;
class CollectTest extends TestCase
{
    public function testKeys()
    {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->keys()-> toArray();
        $this->assertEquals(['CoNR', 'Kostya', 'Max', 'Kir'], $result);
    }

    public function testValue()
    {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->values()-> toArray();
        $this->assertEquals([06, 8, 7, 18], $result);
    }

    public function testGet()
    {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->get('CoNR');
        $this->assertEquals(06, $result);
    }

    public function testExcept() {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->except('Kir') -> toArray();
        $this->assertEquals(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7], $result);
    }
}