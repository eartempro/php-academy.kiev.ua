<?php
echo '<table><tr>';
for ($i = 1; $i <= 10; $i++){
    echo '<td>';
    for ($j = 1; $j <= 10; $j++){
        if($j > 1){
            echo '<br>';
        }
        echo  $i ,' X ', $j, ' = ', $i * $j;

    }
    echo '</td>';
}
echo '</tr></table>';