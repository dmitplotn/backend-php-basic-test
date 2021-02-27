<?php

namespace Ex1\ResponseSender;

function send(string $message, int $statusCode = 200): void
{
    header("Content-Type: application/json; charset=UTF-8");
    http_response_code($statusCode);
    echo json_encode(['message' => $message]);
    exit;
}
