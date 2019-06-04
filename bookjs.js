// JavaScript Document
//Aditya Walunj

<script>
    
function validate()
{
    var name = document.forms["RegForm"]["Name"];
    var sid = document.forms["RegForm"]["Sid"];
    var email = document.forms["RegForm"]["Email"];
    var contact = document.forms["RegForm"]["Contact"];
    var reason = document.forms["RegForm"]["Reason"];
    
    if (name.value == "")
        {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
    if (sid.value == "")
        {
            window.alert("Please enter your student ID");
            sid.focus;
            return false;
        }
    if (email.value == "")
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
    if (reason.value == "")
        {
            window.alert("Please enter a reason for your appointment with Mr. Brett Vance.");
            reason.focus();
            return false;
        }
    if (email.value.indexOf("@", 0) < 0)       { 
            window.alert("Please enter a valid JCU e-mail address."); 
            email.focus(); 
            return false; 
        } 
    if (email.value.indexOf(".", 0) < 0)       { 
            window.alert("Please enter a valid JCU e-mail address."); 
            email.focus(); 
            return false; 
        }
    if (contact.value == "")                           
    { 
        window.alert("Please enter your contact number."); 
        contact.focus(); 
        return false; 
    }
    return true;
} 
    </script>