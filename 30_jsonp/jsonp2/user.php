<?php

// Устанавливаем возможность отправлять ответ для любого домена
//header('Access-Control-Allow-Origin: *');

if (version_compare(phpversion(), '5.3.0', '>=')  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE); 

// Получаем параметры POST
$id = $_REQUEST['id'];
$callback = $_REQUEST['callback'];
// Выполняем вычисления
class Coor {
// данные (свойства):
var $name;

var $id;

}
$object = new Coor;

$object->name = "Alex";
$object->id = $id;

      $aResult = array(
    'result' => 'Input: p1, p2. And sign -  a. a=1 - plus, a=2 - minus, a=3 - multiplication, a=4 - devide');  




// Генерируем результат
header('Content-Type', 'application/javascript; charset=utf-8');
echo $callback.'(
{
      name: "Вася",
      id: '.$id.'
    }
)
    ';
