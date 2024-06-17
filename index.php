<?php 

session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sk Demo</title>
    <link rel="stylesheet" href="Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-1">
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="navbar1">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/GamingBro.jpg" alt="Logo" width="30" height="30" style="border-radius: 20px;" class="d-inline-block align-text-top">
                GamingBro
              </a>          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Join Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
             
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><span style="color: Blue; font-weight: 600;border-radius: 10px; padding: 5px; box-shadow: 0px 0px 0px 0.2px darkolivegreen;">Log Out</span></a>
              </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </ul>
          </div>
        </div>
      </nav> 

       

      <div class="container-fluid">
        <h1>This Is My page  <?php echo  $_SESSION['username']; ?>  </h1>
        <br>
        <h1>Created By <SPan style="font-size: 3rem; /* Adjust as needed */
            background: linear-gradient(red, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;">GamingBro</SPan></h1>
      </div>      
    </div>
    <div class="container-2">
        <div class="title-desc">
            <h1 class="title">💥Know How To Cover Website</h1>
            <p class="desc">Lorem ipsum dolor sit amet adipisicing elit. Et blanditiis
                 asperiores dolor os animi quae nulla quidem dolore itaque deleniti saepe.</p>
            <button type="button" class="btn" id="btn">Base class</button>
        </div>
        <form class="d-flex" role="#">
            <img src="images/Group-76@2x-1526x1080.png" class="img-fluid" alt="#">
          </form>
    </div>

    <div class="container-3">        
        <form class="d-flex" role="#">
            <img src="images/Group 3288.jpg" class="img-fluid" alt="#">
          </form>
          <div class="title-desc">
            <h1 class="title">💥Know How To Cover Website</h1>
            <p class="desc">Lorem ipsum dolor sit amet adipisicing elit. Et blanditiis
                 asperiores dolor os animi quae nulla quidem dolore itaque deleniti saepe.</p>
            <button type="button" class="btn" id="btn">Base class</button>
        </div>
    </div>

    <div class="container-4">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/Mask-Group-872@2x-300x342.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/Mask-Group-8446@2x-300x342.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/Mask-Group-84448@2x-300x342.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/Mask-Group-844449@2x-300x342.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <?php 
        include "footer.php";
       ?>
    <!-- Footer Section
    <footer class="footer">
      <div class="container">
          <div class="row text-center text-md-start">
              <div class="col-md-3 footer-logo">
                  <img src="images/GamingBro.jpg" style="width: 70px; height: 70px;border-radius: 50px;" alt="Company Logo" class="img-fluid">
                  <h2>Company Name</h2>
                  <p>Your company tagline or description goes here.</p>
              </div>
              <div class="col-md-3">
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </div>
              <div class="col-md-3">
                  <h5>Contact Us</h5>
                  <p>Phone: +1 (123) 456-7890</p>
                  <p>Email: info@company.com</p>
                  <p>Address: 1234 Street Name, City, State, 56789</p>
              </div>
              <div class="col-md-3">
                  <h5>Search</h5>
                  <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Search</button>
                  </form>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col text-center">
                  <p>&copy; 2024 Company Name. All rights reserved.</p>
              </div>
          </div>
      </div>
  </footer>
   -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>