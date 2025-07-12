<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
require_once 'database.php';

// Basic response function
function sendResponse($success, $message, $data = null, $statusCode = 200) {
    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Check user role
function checkRole($allowedRoles) {
    if (!isLoggedIn() || !in_array($_SESSION['user_type'], $allowedRoles)) {
        sendResponse(false, 'Unauthorized access', null, 403);
    }
}
?>