function run() {
    const elementForm = document.querySelector('form');
    elementForm.addEventListener('submit', postRequest);
}

async function postRequest(submitEvent)
{
    submitEvent.preventDefault();
    if (submitEvent.defaultPrevented) 
    {
        const validResult = await sendRequest();
        let correctData;
        console.log(validResult);
        if (validResult != null) 
        {
            handleFields(validResult, correctData);
        } 
        else 
        {
            console.log('Error');
        }   
    }
}

function sendRequest() { 
    const url = '../action.php';
    const formData = new FormData(document.querySelector('form'));
    return fetch(url, 
    {
        method: 'POST',
        body: formData
    })
    .then(response => 
    {
        if (response.ok) 
        {
            return response.json()
        } 
        else
        {
            return null;
        }
    }) 
}

function handleFields(userData, correctData)
{
    var messageInput = document.getElementsByClassName('message_input');
    var inputFields = document.getElementsByClassName('form_input');
    var i = 0;
    messageInput[0].style.display = "none";
    correctData = true;
    for (let key in userData) 
    {
        if (userData[key] == 'red')
        {
            correctData = false;
            inputFields[i].style.boxShadow = "0 6px 5px -5px red";
            messageInput[1].style.display = "block";
        }
        i++;
    }
    console.log(correctData);
    if (correctData == true)
    {
        messageInput[1].style.display = "none";
        messageInput[0].style.display = "block";
        for (i = 0; i < inputFields.length; i++)
        {
            inputFields[i].style.boxShadow = "0 6px 5px -5px rgba(0, 0, 0, .1)";
        }
    }
}

window.onload = run;