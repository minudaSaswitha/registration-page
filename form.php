<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg_form1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$school = $_POST["school_name"];
$name = $_POST["name"];
$num = $_POST["phone_num"];
$date = $_POST["birth_day"];

$sql = "INSERT INTO details (school,namee,numberr,birthday) VALUES ('$school','$name','$num','$date')";


if ($conn->query($sql) === TRUE) {
  header("Location: sidebar.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>