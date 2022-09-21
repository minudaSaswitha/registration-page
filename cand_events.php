<?php
session_start();






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
//get the data
if(isset($_POST['submit']))
{   
    if (isset($_POST['submit']) ){
       
   //get the name frog recaptcha.php
   $stu_name = $_SESSION['name'];
   $stID = $_SESSION['regid'];
    $event = $_POST['event'];
    $medium = $_POST['medium'];

    foreach($event as $index => $events)
    {
        
      
       
        $s_event = $events;
        $s_medium = $medium[$index];
        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO candidates (stID,st_name,event,medium) VALUES ('$stID','$stu_name','$s_event','$s_medium')";
        $query_run = mysqli_query($conn, $query);
    }
    
    if($query_run)
    {
        $_SESSION['status'] = "Registerd Successfully!";
        header("Location: sidebar.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Not Successfull!";
        header("Location: sidebar.php");
        exit(0);
    }

}





}



?>