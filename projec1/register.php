<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        
        $sql = "insert into users(firstname,lastname,email,password,confirmpassword) values('$firstname','$lastname','$email','$password','$confirmpassword')";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        //session start
        $_SESSION['is_login'] =true;
        $_SESSION['firstname'] = $firstname;

        header('Location: index.php');

    };
    




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./register.css">
   </head>
  <body>

    <div class="container-fluid mb-5 border" style="background-color: #508bfc;">
       
        <section class="vh-100" style="background-color: #508bfc;">
            <form action="" method="POST" class="form mb-5" role="form">
                <h2>Registration</h2>
                <div class="form-group mt-2">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9 mt-2 w-100">
                        <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9 mt-2 w-100">
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9 mt-2 w-100">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9 mt-2 w-100">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="confirmpassword" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9 mt-2 w-100">
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="form-control" autofocus>
                    </div>
                </div>

                <div class="mt-2">
                    <a href="login.php">BacktoLogin</a>
                </div>
                
                <div class="d-grid gap-2 col-12 mt-2 mx-auto">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" >Register</button>
                </div>


            </form>
        </section>
        
                
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>