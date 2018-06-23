<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

if (isset($_GET['channel']) && !empty($_GET['channel'])) {
    $message = '';
    switch ($_GET['channel']) {
        case 'hooks':
            $message = 'Deploy success. hooks.leovel.com';
            break;
        default:
            $message = 'leovel.com deploy!';
            break;
    }

    $line = new KS\Line\LineNotify(getenv('TOKEN'));
    $line->send($message);
}

