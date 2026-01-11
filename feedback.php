<?php
if(isset($_POST['msg'])){
echo "Feedback: ".$_POST['msg'];
}
?>
<form method="POST">
<input name="msg">
<input type="submit">
</form>
