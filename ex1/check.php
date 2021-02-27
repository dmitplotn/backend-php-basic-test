<?php

require_once __DIR__ . '/LeapYearChecker.php';
require_once __DIR__ . '/ResponseSender.php';

use function Ex1\LeapYearChecker\isLeapYear;
use function Ex1\ResponseSender\send;

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    send('Invalid HTTP method.', 404);
}

if (!isset($_GET['year'])) {
    send("Required HTTP parameter('year') is not defined.", 404);
}

$year = $_GET['year'];

if (!filter_var($year, FILTER_VALIDATE_INT)) {
    send('ОШИБКА ВО ВХОДНЫХ ДАННЫХ', 422);
}

try {
    send(isLeapYear((int) $year) ? 'ДА' : 'НЕТ');
} catch (\LogicException $e) {
    send('ОШИБКА ВО ВХОДНЫХ ДАННЫХ', 422);
}
