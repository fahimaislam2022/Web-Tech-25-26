<!DOCTYPE html>
<html>
<head>
</head>
<body>

<script>
    let x = "5";
    const y = 2;
    let z = [1, 2, 3, 4];

    console.log("1" + x - y);          // Output: 13
    console.log(parseInt(x));           // Output: 5

    let price = 9.99;
    console.log(price.toString() + x); // Output: 9.995

    // This sets z[-3] = 7, does not affect array indices
    z[x.length - 4] = Number(x) + +y;

    console.log(z[1]);                 // Output: 2 (unchanged)
    console.log(typeof(2));            // Output: "number"

    document.write(typeof(x));         // Writes "string" on the page
</script>

</body>
</html>
