<?php
require_once 'includes/config.php';
require_once 'classes/JWT.php';

// On crée le header
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

// On crée le contenu (payload)
$payload = [
    'user_id' => 123,
    'roles' => [
        'ROLE_ADMIN',
        'ROLE_USER'
    ],
    'email' => 'contact@demo.fr'
];

$jwt = new JWT();

$token = $jwt->generate($header, $payload, SECRET);

echo $token;