<?php

function t1()
// Создать функцию t1, которая выводит содержимое файла book1.json на страницу. Формат вывода - элементы строки через пробел, строки - через br
{
    $res = file_get_contents('./one/book1.json'); 
    //$res = '{ "hi" : 1, "two" : 2, "four" : 4 }'; // была ошибка с кавычками
   // var_dump($res); // string(48) "{ "hi" : 1, "two" : 2, "four" : 4 }";
     //$data = json_decode($res, true); // строку в массив // НЕ РАБОТАЕТ собака !!! 
      var_dump(json_decode($res, true)); // NULL 
   
   // print_r($data); // Array ( [hi] => 1 [two] => 2 [four] => 4 )

   $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));
   var_dump(json_decode($json, true));
    
    foreach($data as $item) {
       echo $item .' '; // 1 2 4
    }

   
    echo $out;

    
}


function t2($path)
// Создать функцию t2, которая принимает параметр - путь к файлу json и возвращает его содержимое преобразованное в массив
{
    $res = file_get_contents($path); // НЕ РАБОТАЕТ собака !!!
    $res = '{ "hi" : 1, "two" : 2, "four" : 4 }';
   // print_r($res); // { "hi" : 1, "two" : 2, "four" : 4 }
    $data = json_decode($res, true); // строку в массив - тут что то не работает!!!
    var_dump($data); // NULL 
    return $data; // пусто
}



function t3($path)
// Создать функцию t3, принимает парамет - путь к файлу json(cvs) и возвращает только элементы колонки color через пробел. Т.е. строку типа red green blue.
{
    {
        if (($file = fopen($path, 'r')) !== false) {
            while(($data = fgetcsv($file, 1000, ";")) !== false) {
               // print_r($data);
               var_dump($data[0]);
                //echo $data[0];
                $out = '';
                for($i = 0; $i < count($data); $i++) {
                    // if ($data[$i] == 'color') { 
                    //     //continue;
                    // }
                    //$out .= $data[$i]  . " "; 
                    //echo $i;
    
                }
                //echo $out;
            }
            fclose($file);
        }
    
    }
}

function  t4($arr, $path)
// Создать функцию t4, которая принимает параметр - массив и имя ( расположение) файла. Создает файл json(cvs) и записывает в него массив
{

}

function t5($path)
// Создать функцию t5, которая принимает параметр - путь к файлу json(cvs) и возвращает количество записей в нем
{
    $out = 0;
    if(($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, '', ';')) !== false) {
            if(count($data) !== false) {
                $out++;
            }
        }
        fclose($file);
    }
    return $out;
}
