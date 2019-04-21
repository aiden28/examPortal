function changepassword()
{
    if(document.getElementById("changepassword").innerHTML=="Change Password")
        {
            document.getElementById("changepassword").innerHTML="Back";
            document.getElementById("p1").innerHTML="Press Button to get back to read only mode";
            document.getElementsByName("password")[0].disabled=false;
            document.getElementsByName("update")[0].style.display="inline";
        }
    else{
        
 document.getElementById("changepassword").innerHTML="Change Password";
            document.getElementById("p1").innerHTML="Press Button to Change Password";
            document.getElementsByName("password")[0].disabled=true;
            document.getElementsByName("update")[0].style.display="none";

    }
    
}