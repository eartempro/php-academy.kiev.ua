<?php 
$a = 10;
$b = 3;
$operator = '/';
$result = null;
switch($operator){
    case "*":
        
        $result = $a * $b;
        break;
        case "/":
            if($b == 0){
                echo "На ноль делить нельзя";
                
            }else{
               $result = $a / $b; 
            }
        
        break;
        case "%":
         if($b == 0){
                echo "На ноль делить нельзя";
                
            }else{
               $result = $a % $b; 
            }
        break;
        case "+":
        echo $a + $b;
        break;
        case "-":
        echo $a - $b;
        break;
        default:
            echo "Неизвестный оператор"; 
}
if(isset($result)){
    echo "a $operator b = $result";
}
