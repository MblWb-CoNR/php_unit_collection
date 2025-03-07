<?php
namespace Collect;

use src\Collect;

function collection(array $array = []): Collect
{
    return new Collect($array);
}