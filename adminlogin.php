<!DOCTYPE html>
<html>
<head>
    <title> Online Testing</title>
    <link rel="stylesheet" type="text/css" href="./css/layout.css" />
    <link rel="stylesheet" type="text/css" href="./css/theme.css">
    <script type="text/javascript" src="./js/login.js">
    </script>
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
                   <h1>Admin Login</h1>
                   <form action="adminvalidation.php" method="post">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="user" name="username" placeholder="username"></td>


                   </tr>
                   <tr>
                       <td>Password</td>
                       <td><input type="password" id="pass" name="password" placeholder="password"></td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><input type="submit" value="login" onclick="return adminvalidate()">
                       <input type="reset">
                   </td>
                   </tr>
                   </table>
                   </form>
                    <div id="errormsg"></div>
                   
                </div>
                <div id="footer">
                    Online Test 2k19
                </div>
                </body>
            </html>

                        



