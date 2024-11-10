<?php
header('Content-Type: application/json');

//Mengirimkan Token Keamanan
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$headres = apache_resquest_headers();
if(isset($headers['Csrf-Token'])) {
    if($headres['Csrf-Token'] !== $_SESSION['Csrf-Token']) {
        exit(json_encode(['error'=> 'Wrong CSRF token']));
    }
} else {
    exit(json_encode(['error'=> 'Wrong CSRF token']));
}
?>