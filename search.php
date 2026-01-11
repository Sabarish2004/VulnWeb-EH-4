<?php
include 'db.php';
$q = $_GET['q'];

$sql = "SELECT * FROM users WHERE username='$q'";
$res = mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($res)){
echo $row['username']."<br>";
}
?>
<form>
<input name="q">
<input type="submit">
</form>
