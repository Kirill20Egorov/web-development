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

    $codesErrors = array(2, 4, 6, 8);

    if (!checkEmail($email))
    {
        $formValidArr['email'] = 2;
    }     
    if (!checkName($name))
    {
        $formValidArr['name'] = 4;
    }
    if (!checkText($message))
    {
        $formValidArr['message'] = 6;
    }  
    if (!checkText($subject))
    {
        $formValidArr['subject']  = 8;
    } 
    
    foreach ($formValidArr as $key) 
    {
        foreach ($codesErrors as $codeError)
        {
            if ($key = $codeError)
            {
                $checkData = false;
            }
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
  