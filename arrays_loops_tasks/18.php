<?php
$arr = ['Понеділок','Вівторок','Середа','Четвер','Пятниця','Субота','Неділя'];

foreach ($arr as $dayKey => $day){

    echo $dayKey > 4 ? '<b>'. $day . '</b>' : $day, " ";

}