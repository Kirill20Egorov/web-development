<?php
function getGetParameter(string $text):?string
{
    return isset($_GET[$text]) ? (string)$_GET[$text] : null;
}
header("Content-Type: text/plain");
$email = getGetParameter('email');
if (file_exists('data/' . $email. ".txt"))
{
	$user = file('data/' . $email. ".txt");
	foreach ($user as $lineNum => $currentLine) 
    {
        echo $currentLine;
    }
}
else
{
	echo 'File does not exist';
}
