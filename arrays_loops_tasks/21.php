<?php

for($i = 1; $i <= 9; $i++){
    $rowString  = '';
    for($j = 1; $j <= $i; $j++){
        $rowString  = $rowString . $i;
    }
    echo $rowString , '<br>';
}