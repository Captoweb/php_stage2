<?php

function t9($path)
{
    // Создать функцию t9, которая принимает параметр - имя папки и 
    //возвращет массив состоящий из вложенных массивов, нулевой элемент - полное имя файла, первый элемент - расширение, второй элемент - размер файла.
    
    
    // array_chunk — Разбивает массив на части
    // $input_array = array('a', 'b', 'c', 'd', 'e');
    // print_r(array_chunk($input_array, 2)); // разбивает по 2 элемента
    
    // НО ГДЕ ВЗЯТЬ ТАКОЙ МАССИВ? САМОМУ СДЕЛАТЬ?
    
      
    // var_dump($path); // string(6) "./one/"
    $files = scandir($path); 
    // print_r($files); // Array ( [0] => . [1] => .. [2] => 1.txt [3] => 2.txt [4] => 3.txt ) 
    
   //array_shift($files);  // - можно удалить первый элемент массива
    // print_r($files); // Array ( [0] => .. [1] => 1.txt [2] => 2.txt [3] => 3.txt )
    //array_shift($files);  // - можно удалить первый элемент массива
    //print_r($files); // Array ( [0] => 1.txt [1] => 2.txt [2] => 3.txt )
    

    for ($i = 1; $i <= count($files) - 2; $i++) {
        // if($files != "." && $files != "..") {
            
        echo $path . $i .  ' - '  .'полное имя файла, ';
        
        //  как вытащить расширение ?
        
        echo $size = filesize($path . $i . '.'. 'txt') . ' - ' . ' размер файла, '; 
        
        
    // }
     
}
    
   // попробую вытащить расширение из $files
    for($n = 1; $n <= count($files) - 2; $n++) {
       echo ltrim($files[$n], ".");
        //echo $files[$n]. ' '; // .. 1.txt 2.txt
    } 

}