<?php
session_start();

$input = trim($_POST['captcha'] ?? '');
$answer = $_SESSION['captcha_phrase'] ?? '';

if ($answer === '' || strcasecmp($input, $answer) !== 0) {
    http_response_code(400);
    exit('자동등록방지 문자가 올바르지 않습니다.');
}

// 여기부터 정상 처리 (DB 저장, 메일 전송 등)
$name    = trim($_POST['name']  ?? '');
$phone   = trim($_POST['phone'] ?? '');
// ... 유효성 검사/저장 ...

echo '견적문의가 정상 접수되었습니다.';