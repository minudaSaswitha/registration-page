<?php 
include("config.php");

?>
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg_form1";
$msg = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST["submit"])) {
    $school = $_POST["schoolName"];
    $name = $_POST["name"];
    $num = $_POST["phone_num"];
    $grade = $_POST["grade"];
    $date = $_POST["birth_day"];

  $recaptchaResponse = $_POST["g-recaptcha-response"];
  $userIp = $_SERVER["REMOTE_ADDR"];

  $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIp}";
  $content = file_get_contents($request);
  $json = json_decode($content);
  if ($json->success == "true") {
      $msg = "Hi";
      $sql = "INSERT INTO details (school,namee,numberr,grade,birthday) VALUES ('$school','$name','$num','$grade','$date')";
      if ($conn->query($sql) === TRUE) {
          header("Location: sidebar.php");
        
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          header("Location: registry.php");
          $msg = "You have failed to pass recaptcha. What does this means? ROBOT!";
        }
        
        $conn->close();
  } else {
      $msg = "You have failed to pass recaptcha. What does this means? ROBOT!";
      
  }
  



}







?>