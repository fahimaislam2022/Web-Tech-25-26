<!DOCTYPE html>
<html>
<head>
    <title>Product Inventory Form</title>
</head>
<body>

<center><h2>Product Inventory Management</h2></center>

<form onsubmit="return handleSubmit()">

    <label>Product Name:</label>
    <input type="text" id="pname"><br><br>

    <label>Price:</label>
    <input type="number" id="price"><br><br>

    <label>Quantity in Stock:</label>
    <input type="number" id="quantity"><br><br>

    <label>Category:</label>
    <select id="category">
        <option value="">-- Select Category --</option>
        <option value="Electronics">Electronics</option>
        <option value="Fashion">Fashion</option>
        <option value="Grocery">Grocery</option>
    </select>
    <br><br>

    <label>Expiry Date (DD-MM-YYYY):</label>
    <input type="date" id="expdate">
    <br><br>

    <button type="submit">Submit</button>

</form>

<div id="error"></div>
<div id="output"></div>

<script>

function handleSubmit() {

    var pname = document.getElementById("pname").value.trim();
    var price = document.getElementById("price").value.trim();
    var quantity = document.getElementById("quantity").value.trim();
    var category = document.getElementById("category").value;
    var expdate = document.getElementById("expdate").value;

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Rule 1: All fields required
    if (pname === "" || price === "" || quantity === "" || category === "" || expdate === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }

    // Rule 2: Price must be greater than 0
    if (price <= 0) {
        errorDiv.innerHTML = "Price must be more than 0.";
        return false;
    }

    // Rule 3: Quantity must be a number
    if (isNaN(quantity)) {
        errorDiv.innerHTML = "Quantity must be a number.";
        return false;
    }

    // Convert YYYY-MM-DD → DD-MM-YYYY
    var parts = expdate.split("-");
    var formattedDate = parts[2] + "-" + parts[1] + "-" + parts[0];

    // Rule 4: Validate DD-MM-YYYY format
    var pattern = /^\d{2}-\d{2}-\d{4}$/;
    if (!pattern.test(formattedDate)) {
        errorDiv.innerHTML = "Date must be in DD-MM-YYYY format.";
        return false;
    }

    // Rule 5: Category must be selected
    if (category === "") {
        errorDiv.innerHTML = "Please select a category.";
        return false;
    }

    outputDiv.innerHTML = `
        <strong>Product Added Successfully!</strong><br><br>
        Product Name: ${pname}<br>
        Price: ${price}<br>
        Quantity: ${quantity}<br>
        Category: ${category}<br>
        Expiry Date: ${formattedDate}
    `;

    return false;
}

</script>

</body>
</html>

