<?php

function t1()
{
    if (isset($_GET['inp-1'])){
        return trim($_GET['inp-1']);
    }
    return false;
}


function t2()
{
    // используем функцию https://www.php.net/manual/en/function.max.php
    $i1 = $_GET['inp-2-1'];
    $i2 = $_GET['inp-2-2'];

    if(isset($i1) AND isset($i2))  {
        return trim(max($i1, $i2));
    }  
}


function t3()
{
    if(strlen($_GET['inp-2-1']) > 5) {
        return 1;
    }
    else {
        return 0;
    }
         
}


function t4()
{
    if($_GET['inp-4'] >=18) {
       return 1;
    }
    else {
        return 0;
    }
   
}


function t5()
{
//    var_dump($_GET);

    if(isset ($_GET['i-5'])) {
        return 1;
    }
    else {
        return 0;
    }
      
}


function t6()
{
    $g = $_GET['radio-1'];

    if(isset($g) && $g == 'green')  {
        return trim($g); 
    }
    else if(isset($g) && $g == 'red') {
        return trim($g);
    }
    else if(isset($g) && $g == 'blue') {
        return trim($g);
    } 
}


function t7()
{
    $p = $_POST['radio-2'];

    if(isset($p) && $p == 'green')  {
        return $p;
    }
    else if(isset($p) && $p == 'red') {
        return $p;
    }
    else if(isset($p) && $p == 'orange') {
        return $p;
    }
}


function t8()
{
    if (isset($_POST['i-8'])) {
        return 1;
    }
    else {
        return 0;
    }
}


function t9()
{
   // echo $_POST['i-9']; // example@test.com
   $str1 = $_POST['i-9'];
   $str2 = '@';
   $pos = strpos($str1, $str2); // если в первой строке есть вторая строка

   if (isset($str1)) {
        if ($pos !== false) {
            return 1;
        }
        else {
            return 0;
        }
    }
}


function t10()
{
    if (isset($_POST['i-10'])){
        return trim($_POST['i-10']);
    }
    return false;
}
