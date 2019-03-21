<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "seedubuntu";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uname = $_POST["username"];
$passwd = $_POST["password"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["Email"];


$sql = "INSERT INTO MyGuests (firstname, lastname, email, usrname, password) VALUES ('$fname', '$lname', '$email', '$uname', '$passwd')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successfully!";
    header("location: index.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

</body>
</html>