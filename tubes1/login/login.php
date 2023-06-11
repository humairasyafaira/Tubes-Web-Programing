<?php 

session_start();

require '../function.php';

if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

   if(mysqli_num_rows($result) === 1){

      $row = mysqli_fetch_assoc($result);

      if(password_verify($password, $row['password'])){
         $_SESSION['login'] = true;
         $_SESSION['level'] = $row['level'];

         // cek apakah yang login admin
         if($_SESSION['level'] == 1){
            echo "
            <script>
               alert('Anda berhasil login!');
               window.location.href = '../admin/admin.php';
            </script>
            ";
         }

         // cek apakah yang login user
         if($_SESSION['level'] == 2){
            echo "
            <script>
               alert('Anda berhasil login!');
               window.location.href = '../index.php';
            </script>
            ";
         }

         // set cookie
         if(isset($_POST['remember'])){
            setcookie('id', $row['id']);
            setcookie('key', hash('sha256', $row['username']));
         }
      }
   }
}

?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="style-login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="" method="post">
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me" name="remember">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="login" value="Login"></input>
            </div>
            <div class="signup-link">
               Not a member? <a href="register.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>