<?php
session_start();
/* connect to database check user*/
$con=mysqli_connect('localhost','root', '', 'LoginReg');
mysqli_select_db($con,'LoginReg');

/* create variables to store data */
$name = $_POST['user'];
$pass = md5($_POST['password']);
$student_id = $_POST['student_id'];
$class_name = $_POST['class_name'];
$country = $_POST['country'];

/* select data from DB */
$s = "SELECT * FROM userReg WHERE username='$name'";
/* result variable to store data */
$result = mysqli_query($con, $s);
/* check for duplicate names and count records */
$num = mysqli_num_rows($result);
if($num==1){
    echo "Username Exists";
}else{
     $reg = "INSERT INTO userReg(username, password, student_id, class_name, country) VALUES ('$name', '$pass', '$student_id', '$class_name', '$country')";
    mysqli_query($con, $reg);
    echo "registration successful";
}

?>
