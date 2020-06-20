<?php
function getPostParameter($text):?string
{
    return isset($_POST[$text]) ? $_POST[$text] : null;
}

$email = getPostParameter('email');
$recordFile = 'data/'.$email.".txt";
$name = getPostParameter('name');
$subject = getPostParameter('subject');
$message = getPostParameter('message');
$checkData = true;

function checkEmptyFields($subject, $message, $name, $checkData):?string
{
    $info = array($subject, $message, $name);
    foreach ($info as $value)
    {
        if ($value == null)
        {
            $checkData = false;
        }
    }  
    if (!$checkData)  
    {
        echo 'Error. Check empty fields </br>';
    }
    return $checkData;
}

function writeToFile($checkData, $email, $subject, $message, $name)
{
    if ($checkData)
    {
        $recordFile = fopen('data/' . $email . '.txt', "w+");
        fwrite($recordFile, 'name: ' . $name . PHP_EOL);
        fwrite($recordFile, 'email: ' . $email . PHP_EOL);
        fwrite($recordFile, 'subject: ' . $subject . PHP_EOL);
        fwrite($recordFile, 'message: ' . $message . PHP_EOL);
        fclose($recordFile);
        require_once('form.php');
    }  
}

function checkFile($recordFile, $checkData, $email, $subject, $message, $name)
{

    if (file_exists($recordFile))
    {
        echo 'This email is already used' . PHP_EOL;
    }
    else
    {
        writeToFile($checkData, $email, $subject, $message, $name);
    }    
}

if ($email != null)
{
    checkEmptyFields($subject, $message, $name, $checkData);
    checkFile($recordFile, $checkData, $email, $subject, $message, $name);
}
else
{
    echo 'Error. Write email';
}

  