<<<<<<< HEAD
=======
<?php
    function getGetParameter(string $identifier): ?string
    {
        return isset($_GET[$identifier]) ? (string)$_GET[$identifier] : null;
    }
    header("Content-Type: text/plain");
    $identifier = getGetParameter('identifier');
    $flag = true; 
    //проверка на первый символ
    if ($i == 0 & (($identifier[$i] <= 'z' & $identifier[$i] >= 'a') | ($identifier[$i] <= 'Z' & $identifier >= 'A')) & $identifier <> null) 
    {
        for ($i = 1; $i <= strlen($identifier); $i++ )
        {
           //проверка на несоответствующие символы
           if ((($identifier[$i] >= '!' & $identifier[$i] <= '/' ) | ($identifier[$i] >= ':' & $identifier[$i] <= '`') | ($identifier[$i] == '#')))
           {
               $flag = false;
               echo 'No. Недопустимый символ';
               $i = strlen($identifier) + 1; 
           }
        }
        if ($flag == true)
        {
           echo 'Yes. Это идентификатор';  
        }
    }
    else
    {
        if ($identifier == null)
        {
            echo 'No';
        }
        else
        {
            echo 'No. Идентификатор не может начинаться с цифры';          
        }
    }
 

>>>>>>> 57bbdcc64041f4be9a7f65b62011a330a9e1e0eb
