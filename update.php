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
$email = $_POST["email"];
$passwd = $_POST["password"];

$sql = "UPDATE MyGuests SET email='$email', password='$passwd' WHERE usrname='$uname'";

if ($conn->query($sql) === TRUE) {
    echo "Updated Profile successfully!";
    header("location: index.html");
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>