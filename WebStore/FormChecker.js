function checkForm()
{
	//Validate information
	alert("triggered");
	//return false;
	var p1=document.getElementById("staplerOrderNum").value;
	alert("first order");
	var p2=document.getElementById("staplesOrderNum").value;
	alert("second order);
	var p3=document.getElementById("stapleRemoverOrderNum").value;
	alert("3rd order");
	var ship=document.getElementByName("shipOp");
	alert("shipping option first read");
	var shipPrice=null;
	alert("test");
	for(var x=0; x<ship.length; x++)
	{
		if(ship[i].checked)
		{
			if(x==0)
			{
				shipPrice=0;
			}
			else if(x==1)
			{
				shipPrice=5;
			}
			else
			{
				shipPrice=50;
			}
		}
	}
	alert("Shipping option gamut complete");
	var user=document.getElementById("username").value;
	var pass=document.getElementById("password").value;
	alert(validateEmail(user));
	return false;
	if(p1>=0 && p2>=0 && p3>=0 && (shipPrice==0 || shipPrice==5 || shipPrice==50) && (validateEmail(user)) && pass!="")
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


function reset()
{
	Document.getElementById("staplerOrderNum").value=0;
	document.getElementById("staplesOrderNum").value=0;
	document.getElementById("stapleRemoverOrderNum").value=0;
	
	
	var radios=getElementsByName("shipOp");
	for(var x=0; x<radios.length; x=x+1)
	{
		radios[x].checked=false;
	}
	document.getElementById("username").value="";
	document.getElementById("password").value="";
}


//very basic email validator taken from StackOverflow user "Squirtle"
//link to page: http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/; //I have absolutely no idea what this means.
	alert(re.test(email));
    return re.test(email);
}
