<?php

namespace Ex2\Solution;

// Первый вариант. Декларативный. Наиболее оптимальный.
function filterStringsByPrefix1($prefix, $strings)
{
    $filteredStrings = array_filter($strings, fn($string) => startsWith($string, $prefix));
    return array_values($filteredStrings);
}

// Второй вариант. Императивный. Наименнее оптимальный.
function filterStringsByPrefix2($prefix, $strings)
{
    $filteredStrings = [];

    foreach ($strings as $string) {
        if (startsWith($string, $prefix)) {
            $filteredStrings[] = $string;
        }
    }

    return $filteredStrings;
}

function startsWith($string, $prefix)
{
    return strpos($string, $prefix) === 0;
}
