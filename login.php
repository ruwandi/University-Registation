  <?php
   
// connect database
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'mini_project');

         
?> 

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="home.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Login</h1>
    <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
     <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary" />
      <a href="home.php"><input type="submit" value="Register" name="register" class="btn btn-block btn-primary" /></a>
      
    </form>
    <?php 
        if(isset($_POST['login'])){
          $email=$_POST['email'];
          $password=$_POST['password'];

          $query="select * from user WHERE email='$email' AND password='$password'";
          $qurey_run = mysqli_query($con,$query);

          if (($email=='ruwandi1102@gmail.com')&&($password=='doni1102@')) {
            header('location:admin.php');
          }
          else{
              if (mysqli_num_rows($qurey_run)>0)
             {
              header('location:form.php');

            }
            else{
              echo '<script type ="text/javascript"> alert("Invalid credentials") </script>';
          }
          }
        }


       ?>
  </div>
</div>