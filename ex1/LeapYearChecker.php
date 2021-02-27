<?php

namespace LeapYearChecker;

function isLeapYear(int $year): bool
{
    if ($year <= 0) {
        throw new \LogicException("Invalid year value: {$year}. The value must be from 1.");
    }

    return ($year % 4 === 0) && ($year % 100 !== 0 || $year % 400 === 0);
}
