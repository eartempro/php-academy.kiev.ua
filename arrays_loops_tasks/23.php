<?php
$digits = $_REQUEST['digits'];
$sum = 0;
$errorFlag = false;
for($i = 0; $i < strlen($digits); $i++){
    if(is_numeric($digits{$i})){
        $sum += $digits{$i};
    }else{
        $errorFlag = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<title>
    Калькулятор суммы цифр
</title>
<body>
<h1>Калькулятор суммы цифр</h1>
<form action="" method="get">Введите цифры<input  name="digits" type="text"><input type="submit" value="Посчитать сумму"></form>

<div>
   Сумма <?=$sum?>
    <?php  if($errorFlag): echo 'Строка ввода содержит символы не являющиеся цифрами'; endif; ?>
</div>
</body>
</html>

