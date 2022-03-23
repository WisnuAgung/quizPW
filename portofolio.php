<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>
<link rel="stylesheet" href="set/style.css">

  <div class="main">
    <h2>Portofolio</h2>
    <p>Sekilas tentang portofolio saya. 
      <br></p>
    <br></br>
      <table>
  <tr>
    <th>Pendidikan</th>
    <th>Pengalaman kerja</th>
    <th>Organisasi</th>
    <th>Kepribadian</th>
  </tr>
  <tr>
    <td>1. SD Negeri 1 Kendalrejo</td>
    <td>1. Magang PT Lintang Kawuryan</td>
    <td>1. HIMADIPMI</td>
    <td>1. Ramah ☆☆☆☆</td>
  </tr>
  <tr>
    <td>2. SMP Negeri 1 Trenggalek</td>
    <td></td>
    <td></td>
    <td>2. Komunikatif ☆☆☆</td>
  </tr>
  <tr>
    <td>3. SMA Negeri 1 Trenggalek</td>
    <td></td>
    <td></td>
    <td>3. Bertanggungjawab ☆☆☆☆</td>
  </tr>
  <tr>
    <td>4. Pendidikan Vokasi UB</td>
    <td></td>
    <td></td>
    <td>4. Etos Kerja Tinggi ☆☆☆</td>
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
