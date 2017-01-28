<?php

require_once('./vendor/autoload.php');

use Lcobucci\JWT\Parser;
use Lcobucci\JWT\ValidationData;

use Lcobucci\JWT\Signer\Keychain;
use Lcobucci\JWT\Signer\Rsa\Sha256;

if (! isset($_SERVER['HTTP_AUTHORIZATION'])) {
    print('Expecting the Authorization header.');
    exit;
}

$token = (string) $_SERVER['HTTP_AUTHORIZATION'];

if (empty($token)) {
    print('Token empty');
    exit;
}

$result = preg_match('/Bearer\s+(.+)$/', $token, $matches);

if (! array_key_exists(1, $matches)) {
    print('Invalid bearer header');
    exit;
}

$token  = $matches[1];
$signer = new Sha256();

$token    = (new Parser())->parse($token);
$keychain = new Keychain();

var_dump($token->verify($signer, $keychain->getPublicKey('file://oauth-public.key')));
