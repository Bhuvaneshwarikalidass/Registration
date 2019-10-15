<?php
    if(isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $password = $_POST['password'];
        if($user == "Bhuvana" and $password == "pass")
        {
            echo "connection match";
            header('location:admindetails.php');
        }
        else
        echo("<script>alert('Wrong username or password')</script>");
    }
?>




<center>
<form method = "POST" action = "#">
    UserName:<input type = "text" name = "username"><br><br>
    Password:<input type = "text" name = "password"><br><br>
    <a href = "admin.php"><input type = "submit" name = "submit"></a>
    <a href = "index.php"><input type = "button" value = "Back"></a>
</form>
</center>