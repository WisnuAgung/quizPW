<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">

  <div class="main">
    <h2>Contact Me</h2>
    <p>Hubungi saya melalui banyak aplikasi, silahkan pilih lewat aplikasi kontak saya. 
      <br>Lebih mudah klik gambar untuk langsung kontak saya</p>
    <br></br>
      <table>
  <tr>
    <th ><a href="mailto:albertuswa@student.ub.ac.id"><img src="img/gmail.png" height=20 width=20></th>
    <th ><a href="https://wa.me/628141634859"><img src="img/wa.png" height=20 width=20></th>
    <th ><a href="https://twitter.com/_albertuswa"><img src="img/twitter.png" height=20 width=20></th>
    <th ><a href="https://www.instagram.com/albertuswa"><img src="img/ig.png" height=20 width=20></th>
  </tr>
  <tr>
    <td >Gmail</td>
    <td >Whatsapp</td>
    <td >Twitter</td>
    <td >Instagram</td>
  </tr>
  <tr>
    <td >albertuswa@student.ub.ac.id</td>
    <td >+628141634859</td>
    <td >@_albertuswa</td>
    <td >@albertuswa</td>
  </tr>
</table>
  </div>

  <div class="right">
    <h2>Creator</h2>
    <img src="img/profil.png" class="menu">
    <p>Albertus Wisnu Agung</p>
    <p>215150409111030</p>
    <!-- (B)POST logout ke protect.php untuk menjalankan unset session -->
    <form method="post">
  <input type="hidden" name="logout"/>
  <input type="submit" value="Logout"/>
</form>
  </div>
</body>
</html>
