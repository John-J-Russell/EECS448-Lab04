function checkForm()
{
	//Validate information
	var p1=document.getElementById("staplerOrderNum").value;
	var p2=document.getElementById("staplesOrderNum").value;
	var p3=document.getElementById("stapleRemoverOrderNum").value;
	var ship=document.getElementById("shipOp").value;
	var user=document.getElementById("username").value;
	var pass=document.getElementById("password").value;
	if(p1>=0 && p2>=0 && p3>=0 && (ship==0 || ship==5 || ship==50) &&  pass!="")
	{
		alert("Working");
		return(true);
		
	}
	else
	{
		
		alert("Invalid input");
		return(false);
	}
}

/*
function reset()
{
	Document.getElementById("staplerOrderNum").value=0;
	document.getElementById("staplesOrderNum").value=0;
	document.getElementById("stapleRemoverOrderNum").value=0;
	
	//document.getElementById("the radio buttons idk").value="whatever means nothing";
	var radios=getElementsByName("shipOp");
	for(var x=0; x<radios.length; x=x+1)
	{
		radios[x].checked=false;
	}
	document.getElementById("username").value="";
	document.getElementById("password").value="";
}
*/

//very basic email validator taken from StackOverflow user "Squirtle"
//link to page: http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/; //I have absolutely no idea what this means.
	alert(re.test(email));
    return re.test(email);
}
