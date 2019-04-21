function adminvalidate()
{
    var flag=true;
    var username=document.getElementById("user").value;
    var password=document.getElementById("pass").value;
    var errormsg=document.getElementById("errormsg");
   errormsg.style.color="red";
    if(username=="")
        {
            //event.preventDefault();
    flag=false;
            // errormsg.innerHTML="*Either username/password is blank or incorrect";
        }
    if(password=="")
    flag=false;
    if(flag)
        errormsg.innerHTML="";
    else
        {
event.preventDefault(); 
errormsg.innerHTML="*Either username/password is blank or incorrect";
    
        }
    return(flag);
        
}