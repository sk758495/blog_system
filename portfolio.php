<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sk Demo Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
     <?php 
   include "dbcon.php";

   $query = "SELECT * FROM portfolio_post2;";

   $idata = mysqli_query($con, $query);

   $total = mysqli_num_rows($idata);

   if ($total != 0) {
       while ($result = mysqli_fetch_assoc($idata)) {
?>

        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="navbar1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/GamingBro.jpg" alt="Logo" width="30" height="30" style="border-radius: 20px;"
                        class="d-inline-block align-text-top">
                    GamingBro
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else
                                        here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Templates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Join Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else
                                        here</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-2">
            <div class="title-desc">
                <h1 class="title-x">website  >  Portfolio</h1>
                <h1 class="title">Create a
                    portfolio website💥</h1>
                <p class="desc">Showcase your work online with a portfolio website. Get started with a professionally designed template that can be customized to fit your brand.</p>
                <button type="button" class="btn" id="btn">Get started</button>
            </div>
            <form class="d-flex" role="#">
                <img src="images/Group-76@2x-1526x1080.png" class="img-fluid" alt="#">
              </form>
        </div>

        <div class="container-3">
            <div class="title-desc-3">                
                <h1 class="title-3">Create a
                    portfolio website💥</h1>
                <p class="desc-3">Showcase your work online with a portfolio website. Get started with a professionally designed template that can be customized to fit your brand.</p>
           </div>
        </div>
 

<div class="container-4">
    <div class="title-desc-4">   
        <h1 class="title-y"><?php echo $result['title']; ?></h1>             
        <h1 class="title-4"><?php echo $result['short_title']; ?>💥</h1>
        <p class="desc-3">Choose from a variety of unique <span style="color: green"> <?php echo $result['desc']; ?></span> best displays your work. Add individual projects to keep your website organized and easy-to-navigate.</p>
        <img src="images/35mm-80ties-analog-1002638@2x.jpg" id="image-1" class="img-fluid image" alt="">
    </div>
</div>

<?php 
       }
   } else {
       echo "no record";
   }
?>


        <div class="container-5">
            <div class="title-desc-4">   
                <h1 class="title-y">Create a portfolio that stands out.</h1>             
                <h1 class="title-4">Create a portfolio website💥</h1>
                <p class="desc-3">Choose from a variety of unique layouts to build an online portfolio that best displays your work. Add individual projects to keep your website organized and easy-to-navigate.</p>
                </div>
                <img src="images/35mm-80ties-analog-1002638@2x.jpg" id="image-1" class="img-fluid image" alt="">
        </div>




    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-3 footer-logo">
                    <img src="images/GamingBro.jpg" style="width: 70px; height: 70px;border-radius: 50px;"
                        alt="Company Logo" class="img-fluid">
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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>