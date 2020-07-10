<html>
<head>
    <title>
        Login Page
    </title>
</head>
<body>
    <br>
    <center>
    <form action="login_user.php" method="POST">
        <table>
            <tr>
                <label>Username:&nbsp;</label> 
                <input type="text" name="username" ><br><br>
            </tr>
            <tr>
            <label>Password: &nbsp;</label> 
            <input type="password" name="password" ><br><br>
                
            </tr>
            <tr>
                <input type="submit" value="Login" name="login_btn" >
                <td> <input type="submit" value="Register" name="register_btn" ></td>
            </tr>
        </table>
    </form>
</center>
</body>

</html>