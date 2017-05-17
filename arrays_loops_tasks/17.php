<?php
$arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Oug','Sept','Oct','Dec'];
$current = 'May';
foreach ($arr as $month){

    echo $month == $current ? '<b>'. $month . '</b>' : $month, " ";

}