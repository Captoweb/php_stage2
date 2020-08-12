<?php
echo '<pre>';
function t1()
{
    if (($file = fopen('./one/book1.csv', 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ";")) !== false) {
            $out = '';
            for($i = 0; $i < count($data); $i++) {
                $out .= $data[$i]. " ";
            }
            echo $out;
            echo '<br>';
        }
        fclose($file);
    }
    
}

function t2($path)
{
    $res = [];
    if (($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ";")) !== false) {
            $res[] = $data;
        }
        fclose($file);
    }
    
    print_r($res);
    
}


function t3($path)
{
    if (($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ";")) !== false) {

            $out = '';
            for($i = 2; $i < count($data); $i++) {
                if ($data[$i] == 'color') {
                    continue;
                }
                $out .= $data[$i]  . " "; 

            }
            echo $out;
        }
        fclose($file);
    }


}


function  t4($arr, $path)
{
    
    $fp = fopen($path, 'w');
    
    foreach ($arr as $line) {
        fputcsv($fp, $line, ';');
    }
    
    fclose($fp);

    // открыть и прочитать CSV файл
    if (($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ";")) !== false) {
            $out = '';
            for($i = 0; $i < count($data); $i++) {
                $out .= $data[$i]. " ";
            }
            echo $out;
            echo '<br>';
        }
        fclose($file);
    }
}


function t5($path)
{
if (($file = fopen($path, 'r')) !== false) {
    $out = 0;
    while(($data = fgetcsv($file, 1000, ";")) !== false) {
       //print_r($data);
        //echo '<br>';
        $out++;
    } 
    echo $out;

    fclose($file);
  }

}
