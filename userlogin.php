<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
        <link rel="stylesheet" type="text/css" href="./css/theme.css">
        <script type="text/javascript" src="./js/login.js"></script>
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
                    <h1>User Login</h1>
                    <form action="uservalidation.php" method="post">
                    <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" placeholder="username"></td>
                        
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" placeholder="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="registration.php">new user</a>
                        </td>
                        <td><input type="submit" value="login" onclick="return adminvalidate()">
                        <input type="reset"></td>
                    </tr>
                        </table>
                    </form>
                </div>  
                  <div id="errormsg"></div>
                <div id="footer">
                    copyright &copy; Sgdic.com 2019
                </div>
</body>
</html>