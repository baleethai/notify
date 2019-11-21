<?php

require 'vendor/autoload.php';

// yoururl.com?channel=hook&token=xxx
if (isset($_GET['token']) && !empty($_GET['message'])) {
    $message = trim($_GET['message']);
    $token = trim($_GET['token']);
    $line = new KS\Line\LineNotify($token);
    $line->send($message);
}

echo 'notify';
