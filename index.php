<?php

require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// url.com?channel=hook&token=xxx
if (isset($_GET['channel']) && !empty($_GET['channel'])) {
    $message = '';
    $channel = $_GET['channel'];
    switch ($channel) {
        case 'hooks':
            $message = $channel;
            break;
        default:
            $message = $channel;
            break;
    }

    $line = new KS\Line\LineNotify(getenv('TOKEN'));
    $line->send($message);
}

echo 'notify';
