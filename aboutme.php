<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">

  <div class="main">
    <h2>About Me</h2>
    <p>
      Perkenalkan nama saya Albertus Wisnu Agung. Sekarang saya sedang menjalani masa perkuliahan di Fakultas Ilmu Komunikasi Universitas Brawijaya tepatnya di program studi Sistem Informasi. <br>
      Saya melanjutkan studi di FILKOM lewat jalur SAP atau Sistem Alih Profesi dari D3 yang dulunya sudah saya capai di Vokasi Universitas Brawijaya.
      <br>
      Saya merupakan anak kedua dari tiga bersaudara, tepatnya saudari karena saya laki - laki sendiri. 
      <br>
      Saya berasal dari kota kecil di pinggiran jawa timur yaitu Trenggalek yang di kenal dengan pabrik alen - alen atau tempe kripik. 
      <br>Mungkin itu sekian dari sekilas tentang saya. untuk lainnya akan saya tulis di halaman lain. Terimakasih 
    </p>
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
