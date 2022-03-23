<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">


  <div class="main">
    <h2>Hobby</h2>
    <p>Sekilas tentang Hobby saya. 
      <br></p>
    
      Ada beberapa hobi saya yaitu yang pertama, bermain game.<br><br>
      <img src="img/hobi1.jpg" class="main">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
      Kenapa saya sangat hobi bermain game ? tentu karena menyenangkan dan bisa membuat imajinasi saya lebih bertambah, dan membuat otak kanan maupun kiri semakin terasah karena terbiasa.
      <br><br>
      Lalu yang kedua adalah mengopi dan bersantai. 
      <br><br>
      <img src="img/hobi2.jpg" class="main">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      Alasan saya menyukai hobi ini tidak lain dan tidak bukan adalah karena menurut saya dengan mengopi bisa meningkatkan konsentrasi dan dapat membuat saya menjadi lebih rileks ketika melakukan sesuatu.
      <br><br>
      Ketiga adalah membaca manga atau webtoon, atau cerita bergambar.
      <br><br>
      <img src="img/hobi3.jpg" class="main">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      Membaca hal tersebut menurut saya dapat membuat lebih rileks dalam memahami sebuah cerita atau memahami materi perkuliahan yang banyak dan susah masuk ke otak, menyenangkan karena bisa melakukan kegiatan yang bisa membuat hidup jadi berwarna.
      <br><br>
      Kemudian untuk yang ke empat yaitu, menonton.
      <br><br>
      <img src="img/hobi4.jpg" class="main">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      Menonton adalah hal menarik lainnya yang bisa saya masukkan ke dalam hobi, atau kegiatan menarik yang bisa saya lakukan setiap waktu, entah itu menonton anime, drama korea, atau menonton di bioskop, tapi hal yang paling sering saya lakukan adalah menonton youtube dengan berbagai channel game atau pengetahuan umum sehingga bisa bertambah wawasan.
      <br><br>
      Yang terakhir adalah jalan - jalan.
      <br><br>
      <img src="img/hobi5.jpg" class="main">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      Pergi berjalan kemanapun sesuai yang saya inginkan adalah hobi dan juga bentuk dari apresiasi kepada diri sendiri. Mulai dari Travelling, Hiking, maupun Camping.
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
