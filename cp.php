
<form method="post">

<button type="submit" name="logout">خروج</button>

</form>

<?php
require 'auth.php';
echo 'welcome ' . $_SESSION['username'];
if(isset($_POST['logout'])){
	unset($_SESSION['username']);
	header("Location: login.php");
	exit();
}
?>