<?php
    function getGETParameter(string $text):?String
    {
        return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }
    header("Content-Type: text/plain");
    $text = getGETParameter('text');
    $spaceflag = false;
    for ($i = 0; $i <= strlen($text); $i++)
    {
        if ($text[$i] <> ' ') 
        {
            echo $text[$i];
            $spaceflag = true;
        }
        else
        {
            if ($spaceflag == true) 
            {
                echo $text[$i];
                $spaceflag = false;
            }
        }
    }
