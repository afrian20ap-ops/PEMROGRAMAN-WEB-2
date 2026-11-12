<?php session_start();
if(isset($_POST["Login"])){
$user=$_POST["user"]??"";$pass=$_POST["pass"]??"";
if($user==="rahadian"&&$pass==="123"){$_SESSION["login"]=$user;
echo "<h1>Anda berhasil LOGIN</h1><a href='session2.php'>Ke halaman session</a>";exit;}
echo "Username atau password salah.";
} ?>
<form method="post"><h2>Login Here...</h2>
Username:<input name="user"><br>Password:<input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In"></form>