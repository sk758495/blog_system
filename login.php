<?php 
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <?php 
      include "dbcon.php";

      if (isset($_POST['submit'])) {
        $email= $_POST['email'];
        $password= $_POST['password'];
        

        $emailsearch = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$emailsearch);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
          $email_pass = mysqli_fetch_assoc($query);

          $db_pass = $email_pass['password'];
          $_SESSION['username'] = $email_pass['username'];

          $pass_decode = password_verify($password, $db_pass);

          if ($pass_decode) {
            echo "Login successful";
            header('location:index.php');
          }else{
            echo "password incorrect";

        }
          }else{
              echo "invalid email";

          }
        }
      

     ?>


    <div class="container-fluid">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1 class="heading" style="text-align: center;">Login Your Account Here...</h1>
        <div class="mb-3">
          <label for="exampleUsername1" class="form-label">Enter Registered Email <span style="color: red;">*</span></label>
          <input type="text" name="email" class="form-control" id="exampleUsername1" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter Registered Password <span style="color: red;">*</span></label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
       
        <button type="submit" name="submit"class="btn btn-primary">Login</button>
      </form>

      <p style="margin-top: 50px;">New Registration <a href="register.php">click here</a></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

