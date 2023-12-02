<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/updatestyle.css">
    <title>تعديل المنتج</title>
</head>

<body>
    <div class="crud">
        <div class="head">
            <h1>تعديل المنتج</h1>
        </div>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "product_management";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['1'])) {
            $product_id = $_GET['1'];

            // Fetch product details from the database using the ID
            $sql = "SELECT * FROM products WHERE id = $product_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>

                <form method="post" action="update.php" onsubmit="return validateForm()">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <label> اسم المنتج</label>
                    <input id="product name" type="text" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="اسم المنتج">
                    <label> سعر المنتج</label>
                    <input id="Product price" type="text" name="Product_price" value="<?php echo $row['Product_price']; ?>" placeholder="السعر">
                    <label> الكمية </label>
                    <input id="Quantity" type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>" placeholder="الكمية">
                    <input type="submit" value="حفظ التعديلات">
                </form>

        <?php
            } else {
                echo "لا يوجد منتج بهذا الرقم";
            }
        } else {
            echo "لا يوجد رقم تعريف للمنتج";
        }
        ?>

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
</body>

</html>