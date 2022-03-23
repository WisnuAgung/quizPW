<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">


  <div class="main">
    <h2>Favorites</h2>
    <p>Kegiatan yang paling sering saya lakukan.</p>
    
     <p>Membuka Situs Web :</p>

<div class="slideshow-container">
  <div class="mySlides1">
    <img src="img/slides11.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/slides12.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/slides13.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/slides14.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<p>Bermain Games :</p>
<div class="slideshow-container">
  <div class="mySlides2">
    <img src="img/slides21.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img/slides22.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img/slides23.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img/slides24.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
<script type="text/javascript" src="set/set.js"></script>
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
