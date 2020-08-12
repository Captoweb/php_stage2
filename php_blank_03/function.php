<?php

function t1() {
    /**
     * Поскольку мы еще не умеем работать с функциями
     * я объявил глобальные переменные $a, $b, $c
     * чтобы использовать их внутри функции, я использовал
     * gloabal - теперь $a, $b, $c  внутри и снаружи функции - это одни и те же переменные
     */
    global $a, $b, $c;
    // тут ваш код
    if($a > $b) {
        $c = $a;
    }
    elseif($b > $a) {
        $c = $b;
    }
    
    echo $c;
}

function t2() {
    global $d, $e, $f;

    // тут ваш код
    if($d > $e) {
        $f = $d;
    }
    elseif($e > $d) {
        $f = $e;
    }
    //$f =  присваиваем результат
    echo $f;
}


function t3() {
    global $k, $l;
    

    if ($k < $l) { // если $k меньше $l то перезаписываю $k - как меньшую (то есть как $k,  $k = $k)
       $k = $k;
       $l = $l;
    }

    elseif ($l < $k) { //если $l меньше $k то перезаписываю $l - как меньшую (то есть как $k, $k = $l)
       
        $max = $k;
        $min = $l;

        $k = $min;
        $l = $max;
        
        // тут перезаписывается переменная лишний раз, что делать?
        // Вводить дополнительные переменную и в неё сохранять промежуточный результат.
        
    }

    echo '<br>';

}


function t4() {
    global $s1, $s2, $maxString;
    // тут ваш код
    if (strlen($s1) > strlen($s2)) {
        $maxString = $s1;
    }
    elseif (strlen($s2) > strlen($s1)) {
        $maxString = $s2;
    }

    echo $maxString;
}


function t5()
{
    global $password, $successPass;

    // $successPass = true; - если длина $password больше либо равна 10
    if (strlen($password) >= 10) {
        $successPass = true;
    }
    else {
        $successPass = false;
    }
    echo '<br>';
    var_dump($successPass);

}


function t6()
{
    global $r1, $r2;

    if ($r1 >=0 AND $r1 <= 4) {
        $r2 = 1;
    }
    elseif ($r1 >= 5 AND $r1 <= 7) {
        $r2 = 2; 
    }
    elseif ($r1 >= 8 AND $r1 <= 10) {
        $r2 = 3; 
    }
    else {
        $r2 = 0;
    }

    echo 'Результат: '. $r2;
}