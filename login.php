<html><body>

<form method="post">
   Username:
   <input type="text" name="username" /><br />
   Password:
   <input type="password" name="password" /><br />
   <button type="submit" name="login">دخول</button>
   <a href="signup.php">انشاء حساب جديد</a>

</form>

</body></html>


<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'db.php';
// فتح جلسه
session_start();

// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from names where username = '$user' && pass = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['username'] = $user;
		// ثم يتم الانتقال الى منطقة الاعضاء
		header("Location: cp.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور خاطأ';
	}
	
	
}
?>