<?php
// (A) Cek login dengan cara require check.php , sebagai penyimpanan sementara untuk variabel $users
require "check.php";

// (B) halaman login ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <!-- (C) yang akan tampil apabila variabel $failed dalam check.php bernilai true-->
    <?php if (isset($failed)) { ?>
    <div id="bad-login">Invalid user or password.</div>
    <?php } ?>
<!--(D) form login-->
    <form id="login-form" method="post">
      <h1>PLEASE SIGN IN</h1>
      <label for="user">User</label>
      <!-- (E) nilai untuk membuat data tersimpan ketika login, maka menggunakan cookies, memasukkan cookies ke dalam inputan
      sehingga tersimpan sesuai dengan yang telah di input, menggunakan syntax sebagai berikut untuk user -->
      <input type="text" name="user" required value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>"/>
      <label for="password">Password</label>
      <!-- (E) nilai untuk membuat data tersimpan ketika login, maka menggunakan cookies, memasukkan cookies ke dalam inputan
      sehingga tersimpan sesuai dengan yang telah di input, menggunakan syntax sebagai berikut untuk user -->
      <input type="password" name="password" required value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"/>
      <label for="remember">Rememember Me</label>
      <input type="checkbox" name="remember"/>
      <input type="submit" value="Sign In"/>

    </form>
  </body>
</html>
