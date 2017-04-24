<?php

// Устанавливаем возможность отправлять ответ для любого домена
header('Access-Control-Allow-Origin: *');

if (version_compare(phpversion(), '5.3.0', '>=')  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE); 

// Получаем параметры POST
$sAction = $_POST['action'];
$iParam1 = (int)$_POST['param1'];
$iParam2 = (int)$_POST['param2'];

// Выполняем вычисления
$iResult = 0;
switch ($sAction) {
    case 'sum':
        $iResult = $iParam1 + $iParam2;
        break;
    case 'sub':
        $iResult = $iParam1 - $iParam2;
        break;
    case 'mul':
        $iResult = $iParam1 * $iParam2;
        break;
    case 'div':
        $iResult = $iParam1 / $iParam2;
        break;
}

// Подготавливаем массив результатов
$aResult = array(
    'result' => $iResult, array ("name"=>"max")
);

// Генерируем результат
header('Content-type: application/json');
echo json_encode($aResult);