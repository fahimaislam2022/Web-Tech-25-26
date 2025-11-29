<!DOCTYPE html>
<html>
<head>
    <title>Product Inventory Form</title>
</head>
<body>

<center>
<h1>Product Inventory Management</h1>
</center>

<form onsubmit="return validateProduct()">

    <label>Product Name:</label><br>
    <input type="text" id="productName"><br><br>

    <label>Price:</label><br>
    <input type="number" id="price"><br><br>

    <label>Quantity in Stock:</label><br>
    <input type="number" id="quantity"><br><br>

    <label>Category:</label><br>
    <select id="category">
        <option value="">-- Select Category --</option>
        <option value="Electronics">Electronics</option>
        <option value="Clothing">Clothing</option>
        <option value="Food">Food</option>
    </select><br><br>

    <label>Expiry Date:</label><br>
    <input type="text" id="expiry" placeholder="DD-MM-YYYY"><br><br>

    <button type="submit">Add Product</button>

</form>

<div id="error"></div>
<div id="output"></div>

<script>
function validateProduct()
{
    var name = document.getElementById("productName").value.trim();
    var price = document.getElementById("price").value.trim();
    var quantity = document.getElementById("quantity").value.trim();
    var category = document.getElementById("category").value;
    var expiry = document.getElementById("expiry").value.trim();

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Validation
    if (name === "" || price === "" || quantity === "" || category === "" || expiry === "")
    {
        errorDiv.innerHTML = "All fields are required.";
        return false;
    }

    if (isNaN(price) || Number(price) <= 0)
    {
        errorDiv.innerHTML = "Price must be a number greater than 0.";
        return false;
    }

    if (isNaN(quantity) || Number(quantity) < 0)
    {
        errorDiv.innerHTML = "Quantity must be a number.";
        return false;
    }

    // Check expiry date format DD-MM-YYYY
    var datePattern = /^([0-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-\d{4}$/;
    if (!datePattern.test(expiry))
    {
        errorDiv.innerHTML = "Expiry date must be in DD-MM-YYYY format.";
        return false;
    }

    outputDiv.innerHTML = 
        "Product Added Successfully!<br><br>" +
        "Name: " + name + "<br>" +
        "Price: " + price + "<br>" +
        "Quantity: " + quantity + "<br>" +
        "Category: " + category + "<br>" +
        "Expiry Date: " + expiry;

    // Clear input fields
    document.getElementById("productName").value = "";
    document.getElementById("price").value = "";
    document.getElementById("quantity").value = "";
    document.getElementById("category").value = "";
    document.getElementById("expiry").value = "";

    return false;
}
</script>

</body>
</html>
