<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$result = 0;
echo 'Keys';
foreach ($arr as $key => $element){
    echo  '<br>' , $key;
}
echo '<br><br> Values';
foreach ($arr as $element){
    echo '<br>', $element;
}
