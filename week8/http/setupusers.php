<?php
//setupusers.php
require_once './login.php';
$conn = new mysqli($hostname, $username, $password, $database, $port);
if($conn->error) die($conn->error);
$salt1 = "qm&h*";
$salt2 = "pg!@";
$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$token = hash('ripemd128', "$salt1$password$salt2");
add_user($conn, $forename, $surname, $username, $token);
$forename = 'Pauline';
$surname = 'Jones';
$username = 'pjones';
$password = 'acrobat';
$token = hash('ripemd128', "$salt1$password$salt2");
add_user($conn, $forename, $surname, $username, $token);
function add_user($conn, $forename, $surname, $username, $token){
    $query = "INSERT INTO users VALUES('$forename', '$surname', '$username',
'$token')";
    $result = $conn->query($query);
    if(!$result) die($conn->error);
}
?>