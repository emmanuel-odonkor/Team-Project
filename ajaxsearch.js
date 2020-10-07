
//THIS FUNCTION PERFORMS AJAX POST REQUEST

function gotoServer() {
    // Creation a new object / instance of the class XMLHttpRequest()
    var request = new XMLHttpRequest();
    
    // Using the POST request to go to the server and open the php file "processsearch.php"
    request.open("POST", "ajax.php");
    
    /*Defining event listener for readystatechange event and also
     method monitoring the status of the request.
  "xhttp.onreadystatechange = function() this is a callback function"*/

    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {

            // Inserting the response from server into an HTML element
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    
    // Retrieving the form data using the id which is  "searchform" since we are using JavaScript
    var myForm = document.getElementById("searchform");

    //Creates an object from the class FormData that stores the information inserted in the searchbar
    var formData = new FormData(myForm);

    /* Sending the request to the server to retrieve the stored data that correlates with the inserted
    value in the search bar */
    request.send(formData);
}
