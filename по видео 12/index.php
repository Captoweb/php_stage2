<link rel="stylesheet" href="style.css"> 
<a href="https://jsonformatter.curiousconcept.com/">JSON validator here</a> 

<pre>
<?php

// 1. Прочитать json файл
$res = file_get_contents('s.json');

print_r($res);
echo '<br>';
echo '-------------------------------------------';
echo '<br>';

$data = json_decode($res, true); // строку в массив
var_dump($data);

// Изменение json файла (массив)

for($i = 0; $i < count($data); $i++) {
   // $data[$i]['age'] = $data[$i]['age'] + 10;
   echo $data[$i]['age']. ' ';
}

//print_r($data);

// прочитать измененный json файл
$jsonData = json_encode($data); //  массив в строку 
file_put_contents('t.json', $jsonData); // записать в файл


// file_get_contents — Читает содержимое файла в строку
// file_put_contents — Пишет данные в файл





