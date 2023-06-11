<?php 

require '../function.php';

if(isset($_POST['register'])){
   if(register($_POST) > 0){
      echo "
         <script>
            alert('Anda berhasil mendaftar!');
            alert('Silahkan melakukan login');
            window.location.href = 'login.php';
         </script>
         ";
      } else {
      echo mysqli_error($conn);
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
            Register Form
         </div>
         <form action="" method="post">
            <div class="field">
               <input type="text" name="nama" required>
               <label>Nama Lengkap</label>
            </div>
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="text" name="email" required>
               <label>Email</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="password" name="password2" required>
               <label>Konfirmasi Password</label>
            </div>
            <div class="field">
               <input type="submit" name="register" value="Register"></input>
            </div>
            <div class="signup-link">
               Have a Account? <a href="login.php">Login now</a>
            </div>
         </form>
      </div>
   </body>
</html>