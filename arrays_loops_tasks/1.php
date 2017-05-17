<?php
$array = array('html', 'css', 'php', 'js', 'jq');
foreach($array as $k => $val){
    if($k){
        echo  PHP_EOL , $val ;
    }else{
        echo $val;
    }

}
