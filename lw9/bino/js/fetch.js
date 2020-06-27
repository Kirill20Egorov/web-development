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

function initializeFields(userData)
{
	for (let key in userData)
    {
        if (key != 'status')
        {
            changeClassName(key, 'form_input_error', 'form_input');
        }
    }
}

function changeClassName(key, removedClass, addedClass) 
{
    var classList = document.getElementById(`${key}`).classList;
    if (classList.contains(removedClass)) 
    {  
        classList.remove(removedClass); 
        classList.add(addedClass);
    }
}

function changeMessage(i, removedClass, addedClass)
{
    var classList = document.getElementById(`${key}`).classList;
    if (classList.contains(removedClass)) 
    {  
        classList.remove(removedClass); 
        classList.add(addedClass);
    }
}    
function handleFields(userData, correctData)
{
    let codesErrors = [2, 4, 6, 8];   
    correctData = true;
    initializeFields(userData);
    for (let key in userData) 
    {
        for (let i = 0; i < codesErrors.length; i++)
        {
            if (userData[key] == codesErrors[i])
            {
                correctData = false;
                changeClassName(key, 'form_input', 'form_input_error');
                changeClassName(!correctData, 'message_input', 'message_input_empty');
                changeClassName(correctData, 'message_input_empty', 'message_input');
            }
        }
    }
    if (correctData == true)
    {
        changeClassName(!correctData, 'message_input', 'message_input_empty');
        changeClassName(correctData, 'message_input_empty', 'message_input');
        initializeFields(userData);
    }
}

window.onload = run;