<?php

if ( count($argv) < 2 ) {
    echo 'Usage:', "\n", 'php json2php.php <json file>', "\n";
    exit();
}

$jsonFile = $argv[1];

if ( ! is_file($jsonFile) ) {
    echo 'Json file: ', $jsonFile, 'not exist', "\n";
    exit();
}

$content = file_get_contents($jsonFile);

$data = json_decode($content, true);

if ( ! $data ) {
    echo 'Invalid json data', "\n";
    exit();
}

echo '<?php', "\n\n";

echo 'return ';

var_export($data);

echo ';', "\n";



