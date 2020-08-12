<?php

function t1($path)
{
    if(file_exists($path)) {
        
        return 1;
        
    } else {
        
        return 0;
    }

}



function t2($path)
{
    if(file_exists($path)) {
        
        return filesize($path);
        
    } else {
        
        return 0;
        
    }
    
}



function t3($path)
{
    
    if(is_dir($path)) {
        
        return 'dir';
        
    } elseif(is_file ($path)) {
        
        return 'file';
        
    }
}


function  t4($path)
{
    
    $path = ltrim($path, './'); // удаляю ./
    $ex = explode('.', $path); // разбиваю по .
    
    print_r($ex); // Array ( [0] => one/1 [1] => txt )  
    
}


function t5($path)
{
    
    $filename = $path;
    $handle = fopen($filename, "r"); // открыте файла
    $contents = fread($handle, filesize($filename)); //чтение файла
    fclose($handle); // надо закрывать файл
    //var_dump($contents);
    echo $contents;

}


function t6($path, $str)
{

    $fp = fopen($path, 'w'); // открыть файл для записи
    fwrite($fp, $str); // записать туда $str
    fclose($fp);
    
    $fp = fopen($path, "r"); // открыте файла для чтения
    $contents = fread($fp, filesize($path)); //чтение файла
    fclose($fp); // надо закрывать файл

    echo $contents; 
}


function t7($path, $str)
{
    
    $filename = $path;
    $somecontent = $str; // добавляет новую строку
    
    $handle = fopen($filename, 'a');
    fwrite($handle, $somecontent);
    fclose($handle);
    
    $fp = fopen($path, "r"); // открыте файла для чтения
    $contents = fread($fp, filesize($path)); //чтение файла
    fclose($fp); // надо закрывать файл
    
    echo "Содержимое файла: $contents"; 
    
}



function t8($path)
{

    echo $one = filesize($path . '1.txt') . ' - размер файла 1, ';
    echo $two = filesize($path . '2.txt') . ' - размер файла 2, ';
    echo $three = filesize($path . '3.txt') . ' - размер файла 3, ';
    echo $one + $two + $three. ' - размер всех файлов, ';
    // тут наверное циклом надо?
    
    $dir  = $path; 
    $files = scandir($dir); 
    // print_r($files); // Array ( [0] => . [1] => .. [2] => 1.txt [3] => 2.txt [4] => 3.txt ) 
    
    $sum = 0;
    for ($i = 1; $i <= count($files) - 2; $i++) {
        $size = filesize($path . $i . '.'. 'txt') . ' ';
        $sum += $size++; 
    }
     echo $sum . ' - размер всех файлов считает цикл';
}



function t9($path)
{

$res = [];

if ($handle = opendir($path)) {
while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {
     
         $temp = []; // создать массив
        
         // $entry; // 1.txt2.txt3.txt
         //echo $entry = $entry. ' '; // 1.txt 2.txt 3.txt
        // строку в массив
         $newarr = explode(" ", $entry);
         $txt = explode(".", $entry);
        
        foreach($newarr as $item) {

            $temp = []; // создаем временный массив
            // $item; // добавить в массив -  1.txt
            
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

    closedir($handle);
    }

}


function t10($path)
   
{
    
   if (file_exists($path)) {
        echo 0; 
    } else {
        $text = 42;
        $fp = fopen($path, "w" );
        fwrite($fp, $text);
        fclose($fp);
       
        echo 1;
   }
} 

