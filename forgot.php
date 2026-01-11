<?php
include 'db.php';

if(isset($_POST['user'])){
    $u = $_POST['user'];

    $q = "SELECT password FROM users WHERE username='$u'";
    $r = mysqli_query($conn,$q);

    if(mysqli_num_rows($r)>0){
        $row = mysqli_fetch_assoc($r);
        echo "Your password is: ".$row['password'];
    }else{
        echo "User not found";
    }
}
?>

<form method="POST">
Enter Username:
<input name="user">
<input type="submit">
</form>
