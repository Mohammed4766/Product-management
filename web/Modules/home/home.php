<!DOCTYPE html>
<html dir="rtl">

<head>
    <title> الصفحة الرئيسية </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css">
</head>

<style>
    .head {
        display: flex;
        justify-content: space-around;
        margin-bottom: 50px;
        margin-top: 20px;
    }
</style>

<body>
    <div class="crud">

        <div class="head">
            <h1> مشروع ادارة المنتجات </h1>
            <a href="../Authorization/Create_account.php">
                <h4>انشاء حساب</h4>
            </a>
            <a href="../Authorization/php/sign_out.php">
                <h4> تسجيل الخروج</h4>
            </a>
        </div>

        <form method="post" action="php/insert_product.php" onsubmit="return validateForm()">
            <input type="text" id="product name" name="product_name" placeholder="اسم المنتج">
            <input type="text" id="Product price" name="Product_price" placeholder="السعر">
            <input type="text" id="Quantity" name="Quantity" placeholder="الكمية">
            <input type="submit" id="submit" value="انشاء">


        </form>

        <div class="outputs">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "product_management";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>
  <tr>
    <th>اسم المنتج</th>
    <th>السعر</th>
    <th>الكمية</th>
  </tr> ";
                while ($row = $result->fetch_assoc()) {
                    echo
                    "
                    <tr>
                    <td>" . $row["product_name"] . "</td>
                    <td>" . $row["Product_price"] . "</td>
                    <td>" .  $row["Quantity"] . "</td>
                    <td><a href='php/update_product.php?1= " . $row["id"] . "'><button id='amendment'>تعديل</button></a></td>
                    <td><a href='php/delete_product.php?1= " . $row["id"] . "'><button id='delete'>حذف</button></a></td>
                    </tr>
                    ";

                    // echo "<p><a href='delete_product.php?id=" . $row["id"] . "'>Delete</a> | <a href='modify_product.php?id=" . $row["id"] . "'>Modify</a></p>";
                }
                echo "</table>";
            } else {
                echo "لايوجد منتجات";
            }

            $conn->close();
            ?>

        </div>

    </div>


    <script>
        function validateForm() {
            var product_name = document.getElementById("product name").value;
            var Product_price = document.getElementById("Product price").value;
            var Quantity = document.getElementById("Quantity").value;
            if (product_name == "") {
                alert("يجب عليك ادخال اسم المنتج");
                return false;
            } else if (Product_price == "" || isNaN(Product_price)) {
                alert("السعر يجب ان يكون رقم");
                return false;
            } else if (Quantity == "" || isNaN(Quantity)) {
                alert("الكمية يجب ان يكون رقم");
                return false;
            } else {
                return true
            }

        }
    </script>

    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>

</body>

</html>