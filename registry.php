
<?php 
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="autocomplete.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <title>Document</title>


</head>
<style type="text/css">
    body{
        font-family: 'Poppins';
    }
    @media screen and (max-height: 575px){
        #rc-imageselect, .g-recaptcha {transform:scale(0.65);-webkit-transform:scale(0.65);transform-origin:0 0;-webkit-transform-origin:0 0;}
        }
</style>

<body>
                <?php 
                    session_start();
                    if(isset($_SESSION['success']))
                    {
                        ?>
                            
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'Registered',
                                confirmButtonText: "next",
                                html: '<div>your id is <?php echo $_SESSION['success']; ?> <br />One step to complete</div>',
                               
                                
                                confirmButtonColor: "#4267B2",
                                }).then(function () {
                                    window.location = "sidebar.php";
                                    
                                });
                            </script>
                           

                            <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong></strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> -->
                        <?php
                        unset($_SESSION['success']);
                    }
                ?>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100 ">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="" >

                    <div class=" register mt-0  rounded-4  border border-1 shadow p-3 mb-2">
                            <h1 class="text-center px-5 mx-4">Register</h1>
                            <form class="nonvalidate" action="recaptcha.php" method="POST">
                                <div class="form-group">
                                    
                                <?php 

                                        //index.php

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
                                        $query = "
                                        SELECT schoolName FROM schools 
                                        ORDER BY schoolName ASC
                                        ";

                                        $result = $conn->query($query);

                                        $data = array();

                                        foreach($result as $row)
                                        {
                                            $data[] = array(
                                                'label'     =>  $row['schoolName'],
                                                'value'     =>  $row['schoolName']
                                            );
                                        }

                                        ?>
                                    <label class="form-label" for="name">School</label>
                                    
                                    <input type="text" name="schoolName" id="schoolName" class="form-control" placeholder="School Name" required>


                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" maxlength="10"  title="make sure that you have entered all numbers" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="grade">Grade</label>
                                    <input class="form-control" type="number" id="validationDefault03" name="grade" min="6"  max="18" required>
                                
                                </div>
                          
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day" required>

                                </div>
                                <div class="form-group my-2">
                                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                                
                                </div>
                                <input class="btn btn-primary w-100 " type="submit" name="submit1" value="Submit" id="btn">
                            </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>


</body>

</html>

<script>

var auto_complete = new Autocomplete(document.getElementById('schoolName'), {
    data:<?php echo json_encode($data); ?>,
    maximumItems:10,
   
}); 

</script>
