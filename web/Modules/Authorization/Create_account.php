<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title> انشاء حساب </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="../../img/UI-UX team-bro.svg">
        </div>
        <div class="login-content" dir="rtl">
            <form onsubmit="return validateForm()" action="php/Create.php" method="post">
                <img src="../../img/boy.png">
                <h2 class="title">انشاء حساب جديد</h2>
                <?php
                if (isset($_GET['message'])) {
                    echo "<h3> " . $_GET['message'] . "</h3>";
                }

                ?>

                <input type="text" class="input" placeholder="رقم الجوال" id="number" name="number">
                <input type="text" class="input" placeholder="الاسم" id="nmae" name="nmae">
                <input type="password" class="input" placeholder="كلمة المرور" id="password" name="password">
                <input type="submit" class="btn" value="تسجيل الدخول">
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            password = document.getElementById("password").value;
            number = document.getElementById("number").value;
            nmae = document.getElementById("nmae").value;
            if (number == "" || isNaN(number) || number.length > 10 || number.length < 10) {
                alert("  يجب ادخال رقم الجوال بشكل صحيح");
                return false;
            } else if (password == "" || password.length < 10) {
                alert("يجب ان تكون كلمة المرور اكثر من 10 خانات");
                return false;
            } else if (nmae == "") {
                alert(" يجب ان يتم ادخال اسم المستخدم ");
                return false;
            } else if (number) {

            } else {
                return true;

            }
        }
    </script>

</body>

</html>