<?php

use src\Collect;
use PHPUnit\Framework\TestCase;

class KeysTest extends TestCase
{
    public function testKeys()
    {
        $collect = new Collect(['CoNR' => 06, 'Kostya' => 8, 'Max' => 7, 'Kir' => 18]);
        $result = $collect->keys()-> toArray();
        $this->assertEquals(['CoNR', 'Kostya', 'Max', 'Kir'], $result);
    }

}