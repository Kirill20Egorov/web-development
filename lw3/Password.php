<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Страница о себе</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  </body>
</html>
=======
<?php
    function getGetParameter(string $password):?String
    {
        return isset($_GET[$password]) ? (string)$_GET[$password] : null;
    }
    header("Content-Type: text/plain");
    $password = getGETParameter('password');
    $count = 0;
    $memory = ' ';
    $numeral = 0;
    $upers = 0;
    $safety = 0;
    $lowers = 0;
    for ($number = 0; $number <= strlen($password); $number++ )
    {
        if($password[$number] >= '0' & $password[$number] <= '9')
        {
            $numeral++;
        }
        if($password[$number] >= 'A' & $password[$number] <= 'Z')
        {
            $upers++;
        }
         for ($i = 0; $i <= strlen($password); $i++ )
         {
             if ($i <> $number)
             {
                 if(($password[$i] == $password[$number])&($repeats[$i] == false)&($memory <> $password[$number]))
                 { 
                     $count++;
                     $repeats[$i] = true;
                     $memory = $password[$number];
                 }
             }
         }
    }
  
    $lowers = (strlen($password) - $upers) - $numeral;
    echo 'Повторов: ', $count, ' ';
    echo 'Цифр: ', $numeral, ' ';
    echo 'Букв в верхнем регистре: ', $upers, ' ';
    echo 'Букв в нижнем регистре: ', $lowers, ' ';
    $safety = 4*strlen($password) + 4*$numeral;    
    if ($upers <> 0)
    {
        $safety = $safety + (strlen($password)-$upers)*2;
    }
    if ($lowers <> 0)
    {
        $safety = $safety + (strlen($password)-$lowers)*2;
    }
    if ($numeral == 0)
    {
        $safety = $safety - strlen($password);
    }
    if ($numeral == strlen($password))
    {
        $safety = $safety - strlen($password);
    }
    $safety = $safety - $count;
    echo 'Безопасность пароля: ', $safety;
>>>>>>> 57bbdcc64041f4be9a7f65b62011a330a9e1e0eb
