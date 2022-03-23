<?php
//(A) Membutuhkan nilai true pada protect.php , jika nilai false maka akan redirect ke login.php
require "protect.php"
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="set/style.css">
<script type="text/javascript" src="jquery.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <title>Tugas 2</title>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#222021;padding:15px;text-align:center;">
<h1>Pemrograman Web</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <a class = "onclick" id="home" style="color:#e5e5e5 ;">Home</a>
    <a class = "onclick" id="aboutme" style="color:#e5e5e5 ;">About Me</a>
    <a class = "onclick" id="contact" style="color:#e5e5e5 ;">Contact</a>
    <a class = "onclick" id="portofolio" style="color:#e5e5e5 ;">Portofolio</a>
    <a class = "onclick" id="hobby" style="color:#e5e5e5 ;">Hobby</a>
    <a class = "onclick" id="favorites" style="color:#e5e5e5 ;">Favorites</a>
    
  </div>
  <div class="pages">
   




  </div>
</body>
<!--(B) menggunakan ajax untuk load halaman tanpa refresh browser dengan cara memanggil class dan id nya di halaman index.php
		ini adalah XHR yang bersifat asynchronous yang berarti mengeksekusi dan berjalan di background, untuk cek berjalan di
		background atau tidak, yaitu dengan inspect -> network -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.onclick').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.pages').load('main.php');						
			}else if(menu == "aboutme"){
				$('.pages').load('aboutme.php');						
			}else if(menu == "contact"){
				$('.pages').load('contact.php');						
			}else if(menu == "portofolio"){
				$('.pages').load('portofolio.php');						
			}else if(menu == "hobby"){
				$('.pages').load('hobby.php');						
			}else if(menu == "favorites"){
				$('.pages').load('favorites.php');						
			}
		});
 
 
		// halaman yang di load default pertama kali
		$('.pages').load('main.php');						
 
	});
</script>
</html>
