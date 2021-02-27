<?php

namespace Ex3\Solution;

function distributeSmoothie(int $smoothieCount, int $hipstersCount): int
{
    if ($smoothieCount <= 0) {
        throw new \LogicException('Smoothie count must be from 1.');
    }

    if ($hipstersCount <= 0) {
        throw new \LogicException('Hipsters count must be from 1.');
    }

    return floor($smoothieCount / $hipstersCount);
}
