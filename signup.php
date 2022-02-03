<html>
<body>

<form method="post" >
   Username:
   <input type="text" name="username" required /><br />
   Password:
   <input type="password" name="password" required /><br />
   Email:
   <input type="email" name="email" required /><br />
   <button type="submit" name="signup">الانضمام</button>
   <a href="login.php">تسجيل الدخول</a>
</form>

</body>
</html>
<?php
require 'db.php';
if(isset($_POST['signup'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$qu = "insert into names (username,pass,email) value ('$user','$pass','$email')";
	

	if(mysqli_query($con, $qu)){
	   echo 'تم انشاء الحساب بنجاح يمكنك تسجيل الدخول الان';
	}
}
?>