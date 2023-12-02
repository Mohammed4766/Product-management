function validateForm() {
    password = document.getElementById("password").value;
    number = document.getElementById("number").value;
    if (number == "") {
        alert("number must be filled out");
        return false;
    } else if (password == "") {
        alert("password must be filled out");
        return false;
    }
    else true
}