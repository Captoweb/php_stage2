 <link rel="stylesheet" href="style.css">

  <p><b>Task 9.</b></p>
  <p>Создать функцию t9, которая принимает параметр - имя папки и возвращет массив состоящий из вложенных массивов, нулевой элемент - полное имя файла, первый элемент - расширение, второй элемент - размер файла. </p>
        <?php
        echo '<pre>';
        var_dump(t9( './one/'));
        echo '</pre>';
        ?>

<?php

function t9($path)
{

    // а почему вы стараетесь вместить все в одну функцию. Сделайте дополнительные и это разгрузит.
$res = [];

if ($handle = opendir($path)) {
while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {
     
         $temp = []; // создать массив
        
         $entry; // 1.txt2.txt3.txt
         // строку в массив
         //echo $entry = $entry. ' '; // 1.txt 2.txt 3.txt
         $newarr = explode(" ", $entry);
        
         $txt = explode(".", $entry);
        
       
        foreach($newarr as $item) {

            $temp = []; // создаем временный массив
             $item; // добавить в массив -  1.txt
            
            for($i = 0; $i < count($txt); $i+=2) {
               $temp[] = $txt[$i]; // 1 2 3
          }
            
            
            for($i = 1; $i < count($txt); $i+=2) {
                $temp[] = $txt[$i]; // txt txt txt
            }
            
            $temp[] = filesize($path.$item); // добавить в массив -  размер файла
            

           $res[] = $temp;
        }

    }
}
    
     
    print_r($res);
    //return $res;
    closedir($handle);
    }

}
