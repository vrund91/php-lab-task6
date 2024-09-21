<html>
    <head>
        <title>PHP REGISTRATION</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>FirstName:</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>LastName:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
        <?php
         if(isset($_POST['submit']))
         {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['pass'];

            echo "First Name:".$fname;
            echo "<br>";
            echo "Last Name:".$lname;
            echo "<br>";
            echo "Address:".$address;
            echo "<br>";
            echo "Email:".$email;
            echo "<br>";
            echo "Password:".$password;
         }
        ?>
    </body>
</html>