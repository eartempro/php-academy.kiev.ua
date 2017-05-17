<?php
$digit = $_REQUEST['digit'];
$number = $_REQUEST['number'];
$n = 0;
$error = '';
if(!is_numeric($digit) || strlen($digit)!==1){
    $error .= $digit . " Не цифра ";
}
if(!is_numeric($number)){
    $error .= $number . " Не число";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<title>
    Калькулятор вхождений числа
</title>
<body>
<h1>Калькулятор  вхождений числа</h1>
<form action="" method="get">Цмфра <input value="<?=$digit?>" name="digit" type="text">
     входит в число <input  name="number" value="<?=$number?>" type="text">
    <input type="submit" value="Посчитать сумму">
</form>

<div>
    <?php
    if(!$_REQUEST){

    }elseif($error){
        echo $error;
    }else{
        $т = 0;
        for($i = 0; $i < strlen($number); $i++){
            if($number{$i}==$digit){
                $n ++;
            }
        }
        echo 'Цифра ', $digit, ' встречается ', $n, ' раз';
    }
    ?>


</div>
</body>
</html>
