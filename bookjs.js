// JavaScript Document
//Aditya Walunj

function validate()
{
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var sid = document.getElementById("sid").value;
	var contact = document.getElementById("contact").value;
		
	var emailreg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
	
	if(name!="" && email!="" && age!="" && contact!="")
	{
		if(email.match(emailreg))
		{
			if (contact.length == 10) 
			{ 
				alert("All type of validation has done on OnSubmit event.");
				return true;
			}
			else 
				{
				alert("The Contact No. must be at least 10 digit long!");
				return false;
				}
				}
				else
					{
					alert("Enter a valid Email ID");
					return false;
					}
					}
				else
				{
				alert("All fields are required");
				return false;
			}
	

}
	