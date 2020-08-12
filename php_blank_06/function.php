<?php

function t1($a, $b)
{
    global $out1;
    // тут ваш код

    $out1 = $a + $b;

    echo $out1;
}


function t2($a, $b)
{
    // тут ваш код
      return $a + $b;
}


function t3($a, $b)
{
    // тут ваш код
    if($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}


function t4($str)
{
    // тут ваш код
    $newStr = trim($str);
    return $newStr;
}


function t5($a)
{
    // тут ваш код
    if($a % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
    
}

function t6($a)
{
    // тут ваш код
    if( strlen($a) >= 6) {
        //echo $a;
        return 1;
    }
    else {
        return 0;
    }  
     
}

function t7($a)
{
   // текущий год - год рождения
    return date('Y') - $a;
}

function t8($s)
{
    // тут ваш код
     // 2020 &copy; введенная_строка
     

      return date('Y') . '&copy;' . ' '. $s;
}
