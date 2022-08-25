
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="container with-auto height-auto">
        <section class="row ">

                <div class="d-flex justify-content-center align-items-center vh-100">
                    
                    <div class=" register mt-0  rounded-4  border border-1 shadow p-3 mb-5">
                        <h1 class="text-center">Register</h1>
                        <form class="nonvalidate" action="form.php" method="post">
                            <div class="form-group">
                                <label class="form-label" for="school_name">School</label>
                                <select class="form-control form-select was-validated" aria-label="Default select example" id="school" name="school_name" required>
                                    <option value="" disabled selected hidden>Select your school</option>
                                    <option value="1">Mahamaya Devi Balika College Colombo</option>
                                    <option value="1">Mahamaya Devi Balika College Colombo</option>
                                    <option value="1">Mahamaya Devi Balika College Colombo</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
    
                        
                            </div>
                            <div class="form-group was-validated">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                            
                            </div>
                            <div class="form-group was-validated ">
                                <label class="form-label" for="phone_number">Phone Number</label>
                                <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                            
                            </div>
                            <div class="form-group was-validated"> 
                                <label class="form-label" for="brthday">Birthday</label>
                                <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                            </div>
                            <input class="btn btn-primary w-100 mt-4" type="submit" value="Submit" id="btn">
                        </form>
                    </div>
                </div>
        </section>
           
            
        
    </section>
 
        
 
    
    
    <script>

    </script>
   
      
</body>
</html>