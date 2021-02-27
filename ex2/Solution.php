<?php

namespace Ex2\Solution;

// Первый вариант. Декларативный. Наиболее оптимальный.
function filterStringsByPrefix1(string $prefix, array $strings): array
{
    $filteredStrings = array_filter($strings, fn($string) => startsWith($string, $prefix));
    return array_values($filteredStrings);
}

// Второй вариант. Императивный. Наименнее оптимальный.
function filterStringsByPrefix2(string $prefix, array $strings): array
{
    $filteredStrings = [];

    foreach ($strings as $string) {
        if (startsWith($string, $prefix)) {
            $filteredStrings[] = $string;
        }
    }

    return $filteredStrings;
}

function startsWith(string $string, string $prefix): bool
{
    return strpos($string, $prefix) === 0;
}
