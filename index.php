<?php

function sommeEntiers(int ...$entiers)
{
    return array_sum($entiers);
}

var_dump(sommeEntiers(2, '3', 4.1));