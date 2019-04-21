<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
    <script type="text/javascript" src="registration.js"></script>
</head>
<body>
        <div id="header">
                <h1>Online Testing</h1>
                </div>
                <div id="nav">
                        <a href="adminlogin.php">Admin Login</a><br/>
                        <a href="userlogin.php">User Login</a><br/>
                        <a href="registration.php">New User Registration</a><br/>
                </div>
                <div id="section">
                              <h1>New User Registration Form</h1>
                              <form action="doregistration.php" method ="post"> 
                              <table>
                              <tr>
                                  <td>Username</td>
                                  <td><input type="text" name="username" onkeyup="checkname(this.value)"><span id="spanmsg"></span></td>
                              </tr>     
                              <tr>
                                 <td>Password</td>
                                  <td><input type="password" name="password"></td>
                              </tr>         
                               <td>
                              <tr>
                                  <td></td>
                                  <td>
                                      <input id="submit" type="submit" disabled value="Register" onclick="return uservalidate()"/>
                                  </td>
                              </tr>
                                  </table></form>
                              <div id="errormsg"></div>
                                  </div>
                               
                                <div id="footer">
                   Online Test 2k19
                </div>
</body>
</html>