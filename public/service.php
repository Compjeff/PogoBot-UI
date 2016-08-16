<?php

$config = require '../config.php';

require '../autoloader.php';

header('Content-Type: application/json');

if ( empty($_GET['method']) ) {
    sendError('missing method');
    exit();
}
$method = empty($_GET['method'])?'':$_GET['method'];

$handler = new ServiceHandler($config);

if ( ! method_exists($handler, $method) ) {
    sendError('Method '.$method.' not exists');
    exit();
}

try {
    $result = $handler->$method($_POST);
    sendReply($result);
} catch (Exception $ex) {
    sendError("Exception ".$ex->getMessage());
}

exit();

function sendError($msg) {
    echo json_encode([
        'done' => false,
        'msg' => $msg
    ]);
}

function sendReply($result) {
    echo json_encode([
        'done' => true,
        'result' => $result
    ]);
}