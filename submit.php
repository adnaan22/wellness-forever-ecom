<?php

$name = $_POST['c_fname'];
$last = $_POST['c_lname'];
$email = $_POST['email'];
$subject = $_POST['c_subject'];
$message = $_POST['c_message'];

// echo $name."<br>".$email."<br>".$feedback."<br>";

$con = new mysqli("localhost", "root", "root", "wellnessforever"); //takes 4 parameters//
if($con) {
    // echo "connected successfully. <br>";
    // echo "please wait while we shamlessly submit your data into our highly insecure database <br>";
    $sql = "INSERT INTO hello(name, last, email, subject, message )VALUES ('$name', '$last', '$email', '$subject', '$message')";
    // echo "The SQL query to submit details is ".$sql."<br> Please do it yourself next time, dont bother us.";
    $data = mysqli_query($con, $sql); // takes 2 parameters//
    // echo "<br>".$data;
    // sleep(10);
    echo"<script> alert ('Message recieved successfully, now go back to shopping!'); </script>";
    //header("Location: http://127.0.0.1:8000/success.html"); /* Redirect browser *///
    echo "<script> window.location.href = 'index.html'</script>";
}
else {
    die("connection insuccessful, dying.");
}


?>