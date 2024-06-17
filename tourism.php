<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>turism</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #design {
            width: 600px;
            height: 500px;
        }
        
        .container-z {
            display: flex;
            margin-top: 50px;
            margin-bottom: 50px;
            text-align: center;
            justify-content: space-evenly;
        }
        
        .card {
            border-start-end-radius: 50px;
            border-bottom-left-radius: 50px;
            box-shadow: 0 0 10px black;
        }
        
        .card-img-top {
            border-start-end-radius: 50px;
        }
        /* -------------------------------  krutant css code start here -------------------------- */
        
        .container-m {
            display: flex;
            align-items: center;
            gap: 600px;
        }
        
        .navbar {
            margin-left: -200px;
            box-shadow: 0 0 10px black;
            align-items: center;
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background-color: white;
            width: 130%;
            /* Full width */
            height: 90px;
            /* Set height as needed */
        }
        
        button:hover {
            color: orange;
        }
        
        button {
            border: none;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            box-shadow: none;
        }
        
        #lang {
            font-size: 20px;
        }
        
        #lang {
            margin-left: 15px;
            margin-right: 15px;
        }
        
        #guj {
            border-radius: 40px;
            width: 70px;
            height: 70px;
        }
    </style>
</head>

<body>

    <!--krutant code start here-->

    <div class="container">
        <nav class="navbar">
            <div class="container-m">
                <div class="gj">
                    <button><img src="images/turism logo.jpg" id="guj"></button>
                </div>
                <div class="bar">
                    <button id="lang">Home</button>
                    <button id="lang">About us</button>
                    <button id="lang">Contact us</button>
                    <select name="lang" id="lang">
                        <option value="eng">English</option>
                        <option value="guj">Gujarati</option>
                        <option value="hin">Hindi</option>
                    </select>
                </div>
            </div>


        </nav>


    </div>
    <!--krutant code end here-->



    <!--sk code start here-->
    <div id="carouselExampleCaptions" class="carousel slide" style="margin-top: 10px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/kotna.jpg" class="d-block w-100" id="design" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>kotna</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error similique, debitis facere quia illum corporis eaque labore officiis dolorum molestias.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Laxmi Vilas Palace0.jpg" class="d-block w-100" id="design" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Laxmi-Villas Palace</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error similique, debitis facere quia illum corporis eaque labore officiis dolorum molestias.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Sindhrot-Dam.jpg" class="d-block w-100" id="design" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sindhroad</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error similique, debitis facere quia illum corporis eaque labore officiis dolorum molestias.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/pavagadh.jpg" class="d-block w-100" id="design" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pavagadh</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error similique, debitis facere quia illum corporis eaque labore officiis dolorum molestias.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/Sayaji-Baug.jpg" class="d-block w-100" id="design" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sayaji-baug</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error similique, debitis facere quia illum corporis eaque labore officiis dolorum molestias.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="heading">
        <h1 style="margin-top: 50px;">Most searchable Temple</h1>

    </div>

    <div class="container-z">
        <div class="card" style="width: 18rem; text-align:center">
            <img src="images/kuverbhandari.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">kuverbhandari</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View more...</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; text-align:center">
            <img src="images/Plc_IskonTemple_1565544725.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">IskonTemple</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View more...</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; text-align:center">
            <img src="images/tapovan-temple-1592823.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">tapovan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View more...</a>
            </div>
        </div>
    </div>
    <!--sk code end here-->
    <?php 
        include "footer.php";
       ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>