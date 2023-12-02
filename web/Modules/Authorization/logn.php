<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title> تسجيل الدخول </title>
	<link rel="stylesheet" href="Modules\Authorization\css\style.css">
</head>

<body>
	<div class="container">
		<div class="img">
			<img src="img/UI-UX team-bro.svg">
		</div>
		<div class="login-content" dir="rtl">
			<form onsubmit="return validateForm()" action="Modules\Authorization\php\Au.php" method="post">
				<img src="img/boy.png">
				<h2 class="title">مرحبا</h2>
				<?php
				if (isset($_GET['message'])) {
					echo "<h3>رقم الجوال او كلمة المرور غير صحيحة</h3>";
				}

				?>

				<input type="text" class="input" placeholder="رقم الجوال" id="number" name="number">
				<br>
				<br>
				<input type="password" class="input" placeholder="كلمة المرور" id="password" name="password">
				<br>
				<input type="submit" class="btn" value="تسجيل الدخول">
			</form>
		</div>
	</div>

	<script src="Modules\Authorization\js\logn.js"></script>
    <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 

</body>

</html>