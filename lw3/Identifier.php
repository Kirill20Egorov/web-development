<?php
    function getGETParameter(string $identifier):?String
    {
        return isset($_GET[$identifier]) ? (string)$_GET[$identifier] : null;
    }
    header("Content-Type: text/plain");
    $identifier = getGETParameter('identifier');
    $flag = true;
    if($i == 0 & (($identifier[$i] <= 'z' & $identifier[$i] >= 'a')|($identifier[$i] <= 'Z' & $identifier >= 'A')) & $identifier <> null)  //проверка на первый символ
    {
        for ($i = 1; $i <= strlen($identifier); $i++ )
        {
           if ((($identifier[$i] >= '!' & $identifier[$i] <= '/' )|($identifier[$i] >= ':' & $identifier[$i] <= '`') | ($identifier[$i] == '#')))
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
        if($identifier == null)
        {
            echo 'No';
        }
        else
        {
            echo 'No. Идентификатор не может начинаться с цифры';          
        }
    }
 

