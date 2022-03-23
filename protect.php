<?php
// (A) Memulai session
session_start();

// (B) Menjalankan request logout dengan cara unset session pada variabel user
if (isset($_POST["logout"])) {
   unset($_SESSION["user"]); }

// (C) Fungsi jika membuka halaman tanpa login, atau jika nilai session user tidak memiliki nilai maka akan dikembalikan ke login.php
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit();
}
