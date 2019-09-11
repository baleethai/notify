<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$token = $_GET['token'];

// url.com?channel=hook&token=xxx
if (isset($_GET['channel']) && !empty($_GET['channel'])) {
    $message = '';
    $channel = $_GET['channel'];
    switch ($channel) {
        case 'hooks':
            $message = 'Success ' . $channel;
            break;
        default:
            $message = 'Success ' . $channel;
            break;
    }

    $line = new KS\Line\LineNotify(getenv('TOKEN', $token));
    $line->send($message);
}

echo 'notify whoo';