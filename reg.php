<?php
    include('db.php');
    if(isset($_POST['submit']))
        {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $edu = $_POST['edu'];
        $address = $_POST['address'];

     if(!$name && !$dob && !$edu && !$address)

    {
         echo "<script>alert('Kindly fill all the fields')</script>";
      
    }
     $query = 'insert into info(name,dob,edu,address)values("'.$name.'","'.$dob.'","'.$edu.'","'.$address.'")';
     $result = mysqli_query($con,$query);
    }
?>



<?php
    include('main.php');
?>

<form method = "POST" action = "reg.php">
    <center>
    Name:<input type = "text" name = "name"><br><br>
    DOB:<input type = "text" name = "dob"><br><br>
    Education:<input type = "text"  name = "edu"><br><br>
    Address:<input type = "text" name = "address"><br><br>
    <input type = "submit" name = "submit">
    <a href = "index.php"><input type = "button" value = "Back"></a>
</form>
    </center>

<?php
   include('foot.php');
?>   