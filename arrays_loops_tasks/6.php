<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
print_r($ru);