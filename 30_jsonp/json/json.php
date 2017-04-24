<?php
header ("Content-Type: application/json; charset=utf-8\r\n");
$d = date('r');

$request = array(
    'date' => "$d",
    'text' => 'Some text for you',
    'n' => "5"
);
echo json_encode($request);
?>