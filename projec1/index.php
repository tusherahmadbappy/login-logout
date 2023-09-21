<?php 
    session_start();
    if(isset($_SESSION['is_login'])){

    }
    else{
        header('Location:register.php');
    }

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="">
  </head>
  <body>
        <!--navbar start--->
        <div class="row mb-5">
          <div class="col-md-12">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="login.php" class="btn btn-primary" type="button">Login</a>
                        <a href="logout.php" class="btn btn-primary" type="button">Logout</a>
                    </div>
                </div>
            </nav>
          </div>
          
        </div>
        
    <!--navbar end--->
    <!-- Sidebar -->
    <div class="row">
      <div class="col-md-3 mt-3">
        <aside class="bg-dark text-white p-2"style="position:fixed; margin-left:15px">
          <ul>
            <li class="mt-2"><a href="#Home">Home</a></li>
            <li class="mt-2"><a href="#MyCV">My Cv</a></li>
            <li class="mt-2"><a href="#My Picture">My Picture</a></li>
            <li class="mt-2"><a href="#important link">Important Link</a></li>
            
          </ul>
        </aside>
      </div>

      <div class="col-md-9 mt-5">
          <main>
            <section id="Home">
              <h1>home</h1>
              <img src="./logo.webp" alt="" style="width:50%; height:100%" >
            </section>
            <section id="MyCV" class="mt-5">
              <h1>MyCV</h1>
              <p>Ratione nulla nam, ipsa dignissimos corrupti veniam nostrum, laudantium asperiores sequi numquam placeat velit voluptate in praesentium non labore unde incidunt laborum maxime quae magni.</p>
            </section>
            <section id="MyPicture">
              <h1>My Picture</h1>
              <img src="./uupic.webp" alt="" style="width:100%;">
            </section>
            <section id="important link">
              <h1>Important link</h1>
              <p>Aliquid aliquam magnam ducimus similique obcaecati, unde exercitationem laborum incidunt, quas in ipsum inventore nostrum? Blanditiis optio cumque earum iste odio! Alias sint accusamus repudiandae.</p>
            </section>
           
          </main>
      </div>
      

    </div>
  

    <!--end sidebar-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>