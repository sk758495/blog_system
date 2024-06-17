<?php 
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
  <body>

  <?php

    include "dbcon.php";

    if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);


      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

      $emailquery = " select * from registration where email='$email' ";
      $query = mysqli_query($con,$emailquery);

      $emailcount = mysqli_num_rows($query);


      if ($emailcount>0) {
        echo "email already exists";
      }else{
        if ($password === $cpassword) {
          
          $insertquery = " insert into registration (username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";


          $iquery= mysqli_query($con,$insertquery);

          if ($iquery) {
            ?>

            <script>
              alert("Inserted Successful");
            </script>
            <?php

            }else{
              ?>
              <script>
                alert("Inserted Failed");
              </script>
  <?php

 }

        }else{
          echo "Password is not matched";
        }
      }

    }
    
    ?>


    <div class="container-fluid" style="margin-top: 10px;">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1 class="heading" style="text-align: center;">Register Your Account Here...</h1>

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address <span style="color: red;">*</span></label>
           <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
           <div id="emailHelp" style="font-weight: 400;" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleMobile1" class="form-label">Enter Mobile <span style="color: red;">*</span></label>
          <input type="text" name="mobile" class="form-control" id="exampleUsername1" required>
        </div>
        <div class="mb-3">
          <label for="exampleUsername1" class="form-label">Enter Registered Username <span style="color: red;">*</span></label>
          <input type="text" name="username" class="form-control" id="exampleUsername1" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter Registered Password <span style="color: red;">*</span></label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter Registered Password <span style="color: red;">*</span></label>
          <input type="cpassword" name="cpassword" class="form-control" id="exampleInputPassword1" required>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Register Now</button>
      </form>

      <p style="margin-top: 20px;">Already have an account <a href="login.php">Click here..</a></p>

   

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

