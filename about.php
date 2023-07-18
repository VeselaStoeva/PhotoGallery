<?php
    $con = mysqli_connect('localhost','root', 'root', 'photography',3306);
    if ($con){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }
    mysqli_select_db($con,'photography');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $query="INSERT INTO users(username,email,number) VALUES  ('$name','$email','$number')";
    mysqli_query($con,$query);
    header('location:index.php');

?>