<link rel="stylesheet" href="style.css"> 
<a href="index2.php">2я стр</a>
<?php

// открыть и прочитать CSV файл
echo '<pre>';
if (($file = fopen('book1.csv', 'r')) !== false) {
    while(($data = fgetcsv($file, 1000, ";")) !== false) {
       // print_r($data);
        $out = '';
        for($i = 0; $i < count($data); $i++) {
            $out .= $data[$i]. " ";
        }
        echo $out;
        echo '<hr>';
    }
    fclose($file);
}


//  CSV файл в виде массива

$res = [];
if (($file = fopen('book1.csv', 'r')) !== false) {
    while(($data = fgetcsv($file, 1000, ";")) !== false) {
        $res[] = $data;
    }
    fclose($file);
}

var_dump($res);


