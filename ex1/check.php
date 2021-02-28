<?php

require_once __DIR__ . '/LeapYearChecker.php';

use function Ex1\LeapYearChecker\isLeapYear;

header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(404);
    echo json_encode(['message' => "Неверный HTTP метод"]);
    exit;
}

if (!isset($_GET['year'])) {
    http_response_code(404);
    echo json_encode(['message' => "Требуемый HTTP параметр отсутсвует в запросе"]);
    exit;
}

$year = $_GET['year'];

if (!filter_var($year, FILTER_VALIDATE_INT)) {
    http_response_code(422);
    echo json_encode(['message' => 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ']);
    exit;
}

try {
    $message = isLeapYear((int) $year) ? 'ДА' : 'НЕТ';
    echo json_encode(['message' => $message]);
    exit;
} catch (\LogicException $e) {
    http_response_code(422);
    echo json_encode(['message' => 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ']);
    exit;
}
