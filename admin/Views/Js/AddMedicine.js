function ValidAddMedicine() {
    var category = document.getElementById("category").value;
    var code = document.getElementById("code").value;
    var medicineName = document.getElementById("medicine_name").value;
    var manufacture = document.getElementById("manufacture").value;
    var unit = document.getElementById("unit").value;
    var description = document.getElementById("description").value;
    var unitPrice = document.getElementById("unit_price").value;
    var sellPrice = document.getElementById("sell_price").value;
    var quantity = document.getElementById("quantity").value;
    var sku = document.getElementById("sku").value;
    var expiryDate = document.getElementById("expiry_date").value;
    var error = document.getElementById("error");
    var flag = true;

    if (category == "" || code == "" || medicineName == "" || manufacture == "" || unit == "" || description == "" || unitPrice == "" || sellPrice == "" || quantity == "" || sku == "" || expiryDate == "") {
        flag = false;
        error.innerHTML = "Please fill all fields";
        error.style.color = "red";
        return false;
    } else {
        error.innerHTML = "";
    }

    return flag;
}
