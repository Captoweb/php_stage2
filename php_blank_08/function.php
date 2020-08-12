<?php

function t1()
{
    $a = ['1', 2, true, false, 'hello'];
    return $a;
}

function t2()
{
    $a = [true, false];
    return $a;

}

function t3()
{
    $a = [];

    for($i = 1; $i <= 100; $i++){
        array_push($a, $i);
    }
    return $a;

}

function t4()
{
    $a = [
        10 => 5, 
        15 => 11
    ];
    return $a;
}

function t5($ar)
{
    return $ar[5];
}


function t6($ar)
{
    //  меняет местами 2 и 4 элемент 
    $buf = $ar[2];
    $ar[2] = $ar[4];
    $ar[4] = $buf;

    return $ar;
}

function t7($arr)
{
    $c = count($arr);

    $buf = $arr[0];
    $arr[0] = $arr[$c - 1]; // последний элемент
    $arr[$c - 1] = $buf; 

    return $arr;
}


function t8($arr)
{
    $min = $arr[0];

    for($i = 0; $i < count($arr); $i++) {
        if($min > 0) { // элемент меньше нуля
            $min = $arr[$i]; 
        }
    }

    return $min; // выводит int(-5) 

}


function t9($arr)
{
    $max = $arr[0];

    for($i = 0; $i < count($arr); $i++) {
        if($max < 0) {  // элемент больше нуля
            $max = $arr[$i]; 
        }
    }

    return $max;
}


function t10($num,$arr)
{
    $res = 0;
    
    for($i = 0; $i < count($arr); $i++) {
        if($num == $arr[$i]) { // если есть совпадение
            $res = 1; 
            break;
        }
    }  // заработало!
    return $res;
}