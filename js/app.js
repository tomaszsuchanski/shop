document.getElementById('loadButton').addEventListener('click', function()
{
    let xhr = new XMLHttpRequest();

    xhr.open('GET', '../php/ShowClient.php', true);

    // Set up the callback function that will handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Update the content of the result div with the response text
            document.getElementById('result').innerHTML = xhr.responseText;
        } else {
            console.error('The request failed!');
        }
    };

    // Send the request
    xhr.send();
});

document.getElementById('loadSmartphoneButton').addEventListener('click', function()
{
    let xhr = new XMLHttpRequest();

    xhr.open('GET', '../php/ShowSmartphone.php', true);

    // Set up the callback function that will handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Update the content of the result div with the response text
            document.getElementById('result').innerHTML = xhr.responseText;
        } else {
            console.error('The request failed!');
        }
    };

    // Send the request
    xhr.send();
});

document.getElementById('loadLaptopButton').addEventListener('click', function()
{
    let xhr = new XMLHttpRequest();

    xhr.open('GET', '../php/ShowLaptop.php', true);

    // Set up the callback function that will handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Update the content of the result div with the response text
            document.getElementById('result').innerHTML = xhr.responseText;
        } else {
            console.error('The request failed!');
        }
    };

    // Send the request
    xhr.send();
});

document.getElementById('loadComputerButton').addEventListener('click', function()
{
    let xhr = new XMLHttpRequest();

    xhr.open('GET', '../php/ShowComputer.php', true);

    // Set up the callback function that will handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // Update the content of the result div with the response text
            document.getElementById('result').innerHTML = xhr.responseText;
        } else {
            console.error('The request failed!');
        }
    };

    // Send the request
    xhr.send();
});


