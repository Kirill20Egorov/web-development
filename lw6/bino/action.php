<?php
function getPostParameter(string $text):?string
{
    return isset($_POST[$text]) ? $_POST[$text] : null;
}
$email = getPostParameter('email');
$recordFile = 'data/'.$email.".txt";
$name = getPostParameter('name');
$subject = getPostParameter('subject');
$message = getPostParameter('message');
if ($email != null)
{
    $info = array($subject, $message, $name);
    foreach ($info as $value)
    {
        if ($value == null)
        {
            $checkData = 'Error';
            echo 'Error. Check empty fields </br>';
        }
    }
    if (file_exists($recordFile))
    {
        echo 'This email is already used' . PHP_EOL;
    }
    else
    {
        if ($checkData != 'Error')
        {
            $recordFile = fopen('data/' . $email . '.txt', "w+");
            fwrite($recordFile, 'name: ' . $name . PHP_EOL);
            fwrite($recordFile, 'email: ' . $email . PHP_EOL);
            fwrite($recordFile, 'subject: ' . $subject . PHP_EOL);
            fwrite($recordFile, 'message: ' . $message . PHP_EOL);
            fclose($recordFile);
            echo $info;
            echo 'Form Submitted Succesfully';
            require_once('form.php');

        }
    }
}
else
{
    echo 'Error. Write email';
}

  