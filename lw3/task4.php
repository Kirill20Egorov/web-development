<?php
function getGetParameter(string $text):?string
{
    return isset($_GET[$text]) ? (string)$_GET[$text] : null;
}
header("Content-Type: text/plain");
$email = getGetParameter('email');
$recordFile = 'data/'.$email.".txt";
$first_name = 'first_name: ' . getGetParameter('first_name');
$last_name = 'last_name: ' . getGetParameter('last_name');
$age = 'age: ' . getGetParameter('age');
if ($email != null)
{
    if (file_exists($recordFile))
    {
        echo 'Эта почта занята, данные будут перезаписаны' . PHP_EOL;
    }
    $recordFile = fopen('data/' . $email . '.txt', "w+");
    fwrite($recordFile, 'email: ' . $email . PHP_EOL);
    $info = array($age, $first_name, $last_name);
    foreach ($info as $value)
    {
        if ($value == null)
        {
            $value = 'undefined';
        }
        fwrite($recordFile, $value . PHP_EOL);
    }
    fclose($recordFile);
}
else
{
    echo 'Error. Write email';
}
