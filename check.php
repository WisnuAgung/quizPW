<?php
// (A) Memulai session
session_start();

// (B) memasukkan nilai dari variabel user dan password di dalam session
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
  // (B1) melakukan pengisian variabel users menggunakan array untuk user dan password 
  $users = [
    "admin" => "pw123"
  ];

  // (B2) melakukan validasi apabila nilai dari variabel users sudah sama atau tidak
  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }

  // (B3) apabila tidak sama, maka session akan gagal, dan dalam variabel $failed bernilai true
  if (!isset($_SESSION["user"])) { $failed = true; }
}
// (B4) cookies dari login.php dengan variabel remember yang ada dalam form, apabila tercentang maka akan tersimpan selama 1 jam
//      jika tidak dicentang maka tidak akan tersimpan, atau nilainya kosong
// cara cek nya yaitu dengan inspect pada bagian application -> cookies
if(!empty($_POST["remember"])) {
	setcookie ("user",$_POST["user"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
} else {
	setcookie("user","");
	setcookie("password","");
}

// (C) jika variabel $users sama, maka akan menuju ke halaman index.php
if (isset($_SESSION["user"])) {
  header("Location: index.php"); // halaman index.php
  exit();
}

