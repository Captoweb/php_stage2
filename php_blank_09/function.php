<?php

function t1($num, $arr)
{
    $res = 'no';
    
    if(in_array($num, $arr)) {
        $res = 'yes';
    }
  
    return $res;
}



function t2($num, $arr)
{
   
        $res = 0;
        
        for($i = 0; $i <= count($arr); $i++) {
            if ($arr[$i] == $num) { // если числа совпадают
 
                $res++;
         
            }  
        }
         
    return $res;
}

// Введите дополнительную переменную внутри функции перед циклом, а внутри условия увеличивайте ее на 1 при каждом совпадении условия


// Task 3. Задача не решена.
function t3($num, $arr)
{
    
        $res = 0;
        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] < $num) { // если элемент массива меньше  $num 

                $res++;
            }
        }
    
    return $res; 
    
}
// https://paiza.io/projects/eWfshX7KCnvdDnQiC74RFQ?language=php

//Task 4. Задача не решена. (исправил)
function  t4($num, $arr)
{
    $new_array = [];

        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] > $num) { // если элемент массива меньше  $num 
                array_push($new_array, $arr[$i]); // пушу в новый массив 
                
            }
        }

    return $new_array; // возвращаю новый массив
}

// теперь вроде правильно


// Task 5. Задача не решена.
function t5($num, $arr)
{
    $res = '';
    if ($num == 'even') {
        // цикл выдает четные числа
        for($i = 0; $i < count($arr); $i++) {
            if(($arr[$i] % 2) != 0) { // выводит не четные
                $res .= $arr[$i] . ' ';
            }
        }
        return $res;
    }
   
    elseif($num == 'odd') {
        for($i = 0; $i < count($arr); $i++) {
            if(($arr[$i] % 2) == 0) { // выводит  четные
               $res .= $arr[$i] . ' ';
            }
        }
        return $res;
    }

}
// теперь вроде правильно


function t6($ar)
{
    $res = array_reverse($ar);

    return $res;    
}


function t7($arr)
{
    $res = sort($arr);

    return $arr;
}


function t8($arr)
{
    array_pop($arr);
    return $arr;
    
}


function t9($arr)
{
    array_shift($arr);
    return $arr;
}


function t10($num,$arr)
{
    // если  $arr[$i] == $num , вернуть $i
    
    for($i = 0; $i < count($arr); $i++) {
       
        if($arr[$i] == $num) {
            return $i; 
        }
    }
    return 0;

}

