<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">

<div class="main">
    <h2>Tugas 2 : Client-side Scripting</h2>
    <p>Buat Website Profil HTML + CSS + JS
        <br><br>

Minimal 5 halaman, terkoneksi dengan hyperlink.
<br><br>
Memuat halaman home, data diri, portofolio, hobby, link halaman favorit atau yang sering dikunjungi (dilengkapi dengan foto dan gambar lain).<br>
Style tampilan menggunakan CSS.<br>
Layout CSS.<br>
Fitur tambahan dengan .JS (contoh animasi carousel, pop-up dialog dll)
<br><br>
Menggunakan konsep desain bertema sesuai dengan profil masing– masing.<br>
Boleh menggunakan potongan kode dan resource yang ada di Internet untuk diimplementasikan ke kode kalian, tapi dilarang menggunakan template website, CSS template dan sebagainya secara penuh.
<br><br>

Siapkan hasilnya sebelum pengumpulan minggu depan.</p>
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
  
</html>
