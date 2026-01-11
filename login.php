<?php
include 'db.php';
$result = "";

if(isset($_POST['login'])){
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
    $result = "Login Success!";
}else{
    $result = "Login Failed";
}
}
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>VulnWeb-EH Login</h2>

<form method="POST">
<input name="user" placeholder="Username">
<input name="pass" type="password" placeholder="Password">
<button name="login">Login</button>
</form>

<div class="result"><?php echo $result; ?></div>
</div>

</body>
</html>


