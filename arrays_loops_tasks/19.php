<?php
$arr = ['Понеділок','Вівторок','Середа','Четвер','Пятниця','Субота','Неділя'];
$day = 'Середа';
foreach ($arr as $dayKey => $currentDay){

    echo $day == $currentDay ? '<b>'. $currentDay . '</b>' : $currentDay, " ";

}