<?php
// Данные для отправки
$request = array(
    'StartDate' => '2013-10-10',
    'EndDate' => '2013-10-10',
    'IDS' => array(1,2,3,4,5,6,7)
);
 
// Указание опций для контекста потока
$options = array (
    'http' => array (
        'method' => 'POST',
        'header' => "Content-Type: application/json; charset=utf-8\r\n",
        'content' => json_encode($request)
    )
);
 
// Создание контекста потока
$context = stream_context_create($options);
// Отправка данных и получение результата
echo file_get_contents('http://test.ru/json.php', 0, $context);

?>