<?php 
    include 'db.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "select *from users where email='$email' && password='$password'";
        $statement = $pdo->query($sql);
        $user = $statement->fetch(pdo:: FETCH_ASSOC);

        //session start
        session_start();
        if($user){
            $_SESSION['is_login']=true;
            $_SESSION['name']=$user['name'];
            header('Location:index.php');
        }else{
            $_SESSION['message'] = "your password or mail not correct";
        }
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
    <section class="vh-100" style="background-color: #508bfc;">


        

            <?php 
                if(isset($_SESSION['message'])){
                    $msg = $_SESSION['message'];
                    echo "<p class='alert alert-danger'>$msg</p>";
                }

            ?>
         
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <form action="" method="POST" class="form-control">
                                <h3 class="mb-5 text-center">Sign in</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">User Name</label>
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" />

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />

                                </div>

                                <!-- Checkbox -->


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check d-flex justify-content-start mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p>
                                    
                                    </div>
                                </div>

                                <div class="d-grid gap-2 col-12 mt-2 mx-auto">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>

                                <hr class="my-4">

                                <div class="d-grid gap-2 col-12 mt-2 mx-auto">
                                    <div class="row" style="background-color:gainsboro">
                                        <div class="col-sm-6 mt-1">
                                            <h6 style="margin-left:100px">new user?</h6>
                                        </div>
                                    
                                        <div class="col-sm-6 mt-1">
                                            <a href='register.php'>Register</a>
                                        </div>
                                    </div>
                                
                                </div>

                            </form>
                           

            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>