<!DOCTYPE html>
<html>
<head>
<body>
    <form method="POST">
        Name:
        <input type="text" name="name1" required/><br>
        E-mail:   
        <input type="email" name="email" required/><br>
        Specific Time:
        <input type="time" name="Time" required/><br>
        Class Details:
        <textarea id="Class_Details" name="Class_Details" rows="4" cols="50"></textarea><br>
        Gender:
        <input type="radio" name="gender" id="Female" value="Female"/>Female
        <input type="radio" name="gender" id="Male" value="Male"/>Male
        <br>
        <input type="submit" name="submit" value="submit"/><br>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        echo "<h2>Your given details are as:</h2>";
        $Name = $_POST['name1'];
        $Gmail = $_POST['email'];
        $Time = $_POST['Time'];
        $class = $_POST['Class_Details'];
        $Gender = $_POST['gender'];
       
        echo $Name;
        echo "<br>";
        echo $Gmail;
        echo "<br>";
        echo $Time;
        echo "<br>";
        echo $class;
        echo "<br>";
        echo $Gender;
    }
    ?>
</head>
</body>
</html>
