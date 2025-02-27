<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true,
    'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());