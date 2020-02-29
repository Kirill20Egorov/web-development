<?php
    function getGETParameter(string $text):?String
    {
        return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }
    header("Content-Type: text/plain");
    $text = getGETParameter('text');
    $text = trim($text);
    $text = preg_replace('/\s+/', ' ', $text);
    echo $text;
