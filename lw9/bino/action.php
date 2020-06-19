<?php
function getPostParameter(string $text):?string
{
    return isset($_POST[$text]) ? $_POST[$text] : null;
}

handleUserData();
function checkEmail($email)
{
    return (filter_var($email, FILTER_VALIDATE_EMAIL) != '');  
}

function checkName($name)
{
    return (preg_match('/^[a-zA-Zа-яёА-ЯЁ\s\-]+$/u', $name));  
}

function checkText($text)
{
    return (preg_match('/[a-z0-9]+/i',$text));
}

function handleUserData() 
{      
    $checkData = true;
    $colored = 'red';
    $email = getPostParameter('email');
    $name = getPostParameter('name');
    $subject = getPostParameter('subject');
    $message = getPostParameter('message');
    $formValidArr = [                
        'name' => '', 
        'email' => '', 
        'subject' => '' , 
        'message' => '',
        'status' => '',
    ];

    if (!checkEmail($email))
    {
        $formValidArr['email'] = $colored;
    }     
    if (!checkName($name))
    {
        $formValidArr['name'] = $colored;
    }
    if (!checkText($message))
    {
        $formValidArr['message'] = $colored;
    }  
    if (!checkText($subject))
    {
        $formValidArr['subject']  = $colored;
    } 
    
    foreach ($formValidArr as $key) 
    {
        if ($key == "red")
        {
            $checkData = false;
        }
    }
    if ($checkData != false)
    {
        $formValidArr = [                                                                   
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'status' => 'success'
        ];  
    }

    echo json_encode($formValidArr);
}   
  