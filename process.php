<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abclogistics";

$Uname = $_POST["Username"];
 $Password = $_POST["Password"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Username,Password)
VALUES ('$Uname','$Password')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">
           window.location = "search.php"
      </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
