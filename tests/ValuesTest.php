<?php

use src\Collect;
use PHPUnit\Framework\TestCase;
class ValuesTest extends TestCase
{
    public function testValue()
    {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->values()-> toArray();
        $this->assertEquals([06, 8, 7, 18], $result);
    }
}