<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$flag = false;
foreach ($arr as $el){
    if($el == 2 || $el == 3 || $el == 4){
        $flag = true;
    }
}
echo $flag ? "Есть!" : "Нет!";