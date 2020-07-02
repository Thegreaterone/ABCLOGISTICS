<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abclogistics";

$Name = $_POST["Name"];
 $Password = $_POST["Password"];
 $Street = $_POST["Street"];
 $City =$_POST["City"];
 $Zip =$_POST["Zip"];
 $State =$_POST["State"];
 $Country =$_POST["Country"];
 $Phone = $_POST["Phone"];
 $PhoneExtension = $_POST["PhoneExtension"];
 $Email = $_POST["Email"];
 $Fax =$_POST["Fax"];
 $Contacts=$_POST["Contacts"];
 $Website=$_POST["Website"];
 $MCNum = $_POST["MCNum"];
 $Status =$_POST["Status"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cargodriver (Name,Password,Street,City,Zip,State,Country,Phone,PhoneExtension,Email,Fax,Contacts,Website,MCNum,Status)
VALUES ('$Name','$Password','$Street','$City','$Zip','$State','$Country','$Phone','$PhoneExtension','$Email','$Fax','$Contacts','$Website','$MCNum','$Status')";

if ($conn->query($sql) === TRUE) {
    echo "You will be informed when a customer needs your service";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
