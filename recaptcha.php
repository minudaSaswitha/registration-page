<?php
session_start();

if (isset($_POST['submit1']) && $_POST['g-recaptcha-response'] != "") {
    include "connect.php";
    
    //session for pass name to cand_events.php
    $_SESSION['name'] = $_POST['name'];
    
    $school = $_POST["schoolName"];
    $name = $_POST["name"];
    $num = $_POST["phone_num"];
    $grade = $_POST["grade"];
    $date = $_POST["birth_day"];
    $scl = substr($school, 0, 1);
    $number = rand(1,99999);
    $id = "Reg_".$number."_".$scl;
    $_SESSION['regid'] = $id;

    $secret = '6LdzgeshAAAAABi6Urt3HtZhxiL1XDWBupQR7fH4';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        

        $insert = mysqli_query($connect, "INSERT INTO details (can_id,school,namee,numberr,grade,birthday) VALUES ('$id','$school','$name','$num','$grade','$date')");
        if ($insert) {
            $_SESSION['success'] = $id;
            header("Location: registry.php");
            exit(0);
             
            
        }
          $conn->close();

    }
}

?>
<!-- print if recaptcha doesnt pass -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Document</title>

</head>
<body>

<div class="container d-flex justify-content-center w-auto align-items-center vh-100">
    <div class=" alert alert-danger" role="button" onclick="javascript:history.go(-1)">
        Please make sure that You are not a robot by passing recapcha "CLICK TO" return
    </div>
    <?php
     
    ?>
</div>
</body>
</html>

