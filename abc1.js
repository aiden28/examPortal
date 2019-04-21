   function asd()
{
	//document.getElementById("f1").addEventListener("submit",fun1);
    //function fun1(event)
	//{
		var username=document.getElementById("username").value;
if(username=="")
	{
		event.preventDefault();
document.getElementById("errormsg").innerHTML="*Either username/password is blank or incorrect";
	}
	}
    
