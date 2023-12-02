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