<?php
namespace Collect;

use Collect\Collect;

function collection(array $array = []): Collect
{
    return new Collect($array);
}