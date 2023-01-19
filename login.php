<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Geustbook</h1></header>
    <main><form action="users.php" method="post">
    <input type="password" name="password" placeholder="password">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="comment" placeholder="comment">
    <input type="submit" value="submit"></form>

    
</main>
</body>

</html>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Uppgift_8";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM guestbook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " - Email: ". $row["email"]. "Time: " . $row["time"] . "Comment " . $row["comment"] . "<br>";
    }
} else {
    echo "0 results";
}
?>