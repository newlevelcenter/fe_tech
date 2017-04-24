<?php

// Устанавливаем возможность отправлять ответ для любого домена
header('Access-Control-Allow-Origin: *');

if (version_compare(phpversion(), '5.3.0', '>=')  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE); 

// Получаем параметры POST
$sAction = $_REQUEST['a'];
$iParam1 = (int)$_REQUEST['p1'];
$iParam2 = (int)$_REQUEST['p2'];


// Выполняем вычисления
$iResult = 0;
switch ($sAction) {
    case '1':
        $iResult = $iParam1 + $iParam2;
        break;
    case '2':
        $iResult = $iParam1 - $iParam2;
        break;
    case '3':
        $iResult = $iParam1 * $iParam2;
        break;
    case '4':
        $iResult = $iParam1 / $iParam2;
        break;
}

// Подготавливаем массив результатов
$aResult = array(
    'result' => $iResult, 'name' => 'max'
);

// Генерируем результат
header('Content-type: application/json');
echo json_encode($aResult);