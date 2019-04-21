function validateform()
{
	var flag=true;
	var que=document.getElementById("que1").value;
	var optiona=document.getElementById("optiona1").value;
	var optionb=document.getElementById("optionb1").value;
	var optionc=document.getElementById("optionc1").value;
	var optiond=document.getElementById("optiond1").value;
	var ans=document.getElementsByName("ans");
    var subject=document.getElementById("subject1").value;
	var errormsg=document.getElementById("errormsg");
	errormsg.style.color="red";
	if(que=="")
		flag=false;
    if(optiona=="")
		flag=false;
		if(optionb=="")
		flag=false;
		if(optionc=="")
		flag=false;	
	    if(optiond=="")
		flag=false;
	if(ans[0].checked||ans[1].checked||ans[2].checked||ans[3].checked)
        {
            flag=true;
        }

		
    else
        flag=false;
	if(subject=="")
		flag=false;
	if(flag==false)
        {
            event.preventDefault();
		errormsg.innerHTML="*All fields are mandatory";
        }
	else
		errormsg.innerHTML="";
	return(flag);


	
	
}