<?php
    function getGETParameter(string $text):?String
    {
        return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }
    header("Content-Type: text/plain");
    $text = getGETParameter('text');
    $flag = false;
    for ($i = 0; $i <= strlen($text); $i++)
    {
        if ($text[$i] <> ' ') 
        {
            echo $text[$i];
            $flag = true;
        }
        else
        {
            if ($flag == true) 
            {
                echo $text[$i];
                $flag = false;
            }
        }
    }
