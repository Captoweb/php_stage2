<link rel="stylesheet" href="style.css">

<?php

// Нахождение размера файла
echo filesize('./one/t1.txt') . ' - размер файла';

// Создание файла
$fp = fopen('./one/data.txt', 'w');
    //fwrite($fp, 'созданный файл');
    //fwrite($fp, ' + дополнительный текст');
    $a = fwrite($fp, date('Y m d H:i:s', time()));
echo '<br>';
var_dump($a);
fclose($fp);

// Чтение файла
$filename = "./one/data.txt";
$handle = fopen($filename, "r"); // открыте файла
$contents = fread($handle, filesize($filename)); //чтение файла
fclose($handle); // надо закрывать файл
echo '<br>';
echo '<br>';
var_dump($contents);
echo '<br>';
echo '<hr>';

//Получать содержимое папки
if($handle = opendir('./one')) {
    while(false !== ($entry = readdir($handle))) {
        if($entry != "." && $entry != "..") {
            echo "$entry<br>";
            echo filesize('./one/'.$entry); 
            echo '<br>';
        }
    }
    closedir($handle);
}

// Запись в файл
$fp = fopen('data.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);
// содержимое 'data.txt' теперь 123, а не 23!


    $filename = $path;
    $somecontent = $str; // добавляет новую строку
    
    $handle = fopen($filename, 'a');
    fwrite($handle, $somecontent);
    //echo "Записали ($somecontent) в файл ($filename)";
    //echo '<br>';
    //echo $somecontent;

    fclose($handle);
    
    $fp = fopen($path, "r"); // открыте файла для чтения
    $contents = fread($fp, filesize($path)); //чтение файла
    fclose($fp); // надо закрывать файл
    
    echo "Содержимое файла: $contents"; 

    

    //  file_exists ( string $filename ) : bool
    // Проверяет наличие указанного файла или каталога. 
    
    //  is_dir ( string $filename ) : bool
    // Возвращает TRUE, если файл существует и является директорией, иначе возвращается FALSE. 

    //  is_file ( string $filename ) : bool
    // Определяет, является ли файл обычным файлом. 

  // explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array
    // Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя. 

// implode ( string $glue , array $pieces ) : string
// Объединяет элементы массива с помощью строки glue. 


// scandir — Получает список файлов и каталогов, расположенных по указанному пути
// Пример #1 Простой пример использования функции scandir()
    
$dir    = '/tmp';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);

// Получить список файлов директории в виде массива

// То же самое делает функция scandir(), разница в том что у нее в массиве будут «.», «..» и есть возможность сортировки.

function list_files($path)

{

    if ($path[mb_strlen($path) - 1] != '/') {

        $path .= '/';

    }

 

    $files = array();

    $dh = opendir($path);

    while (false !== ($file = readdir($dh))) {

        if ($file != '.' && $file != '..' && !is_dir($path.$file) && $file[0] != '.') {

            $files[] = $file;

        }

    }

 

    closedir($dh);

    return $files;

}

 

print_r(list_files(__DIR__));

// PHP

// Array

// (

//     [0] => favicon.ico

//     [1] => index.php

//     [2] => image.jpg

//     [3] => robots.txt

// )