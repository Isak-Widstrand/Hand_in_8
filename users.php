<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Uppgift_8";
$conn = new mysqli($servername, $username, $password, $dbname);

$password = $_POST["password"];
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

if($password == "12345"){

    $sql = "INSERT INTO guestbook (name, email, comment, time) VALUES ('$name', '$email', '$comment', now())";
    $conn->query($sql);

}

else{
    echo "Wrong password";
}

header("Location: login.php");