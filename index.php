<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

if (isset($_GET['channel']) && !empty($_GET['channel'])) {
    $message = '';
    $channel = $_GET['channel'];
    switch ($channel) {
        case 'hooks':
            $message = 'Success';
            break;
        default:
            $message = 'Success';
            break;
    }

    $line = new KS\Line\LineNotify(getenv('TOKEN'));
    $line->send($message);
}

