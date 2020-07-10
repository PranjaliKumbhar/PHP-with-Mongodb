<html>
<head>
    <title>
        Registration Page
    </title>
</head>
<body>
    <br>
    <center>
    <form action="register_user.php" method="POST">
        <table>
            <tr>
                
            <td><label>First Name:&nbsp;</label> </td>
            <td><input type="text" name="fname" ></td>
          
            </tr>
           <tr>
            <td>            </td>
            <td></td>
           </tr>

            <tr>
            <td><label>Last name:&nbsp;</label></td> 
            <td> <input type="text" name="lname" ></td>
            <br>
            </tr>
            <tr>
            <td><label>Email:&nbsp;</label> </td>
            <td><input type="text" name="email" ></td>
            <br>
            </tr>

            <tr>
            <td><label>Set password:&nbsp;</label> </td>
           
            <td><input type="password" name="setpassword" ></td>
            <br>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td> <input type="submit" value="Register" name="register_btn" ></td>
            <td> <input type="submit" value="Login" name="login_btn"></td>
            </tr>
        </table>
    </form>
</center>
</body>

</html>