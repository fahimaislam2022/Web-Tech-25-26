<!DOCTYPE html>
<html>
<head>
    <title>Fruit Click Output</title>
</head>

<body>

<h2>Fruit Output</h2>

<button onclick="changeOutput()">Click</button>

<p id="result"></p>

<script>

let clickCount = 0;

const fruits = ["apple", "banana", "orange"];

function changeOutput() {

    clickCount++;

    if (clickCount === 1) {
        document.getElementById("result").innerText = fruits.join(", ");
    } 
    else if (clickCount === 2) {
        document.getElementById("result").innerText = [...fruits, "apple"].join(", ");
    } 
    else if (clickCount === 3) {
        document.getElementById("result").innerText = [...fruits, "apple", "banana"].join(", ");
    } 
    else if (clickCount === 4) {
        document.getElementById("result").innerText = [...fruits, "apple", "banana", "orange"].join(", ");
    } 
    else if (clickCount === 5) {
        document.getElementById("result").innerText = "end";
    } 
    else {
        document.getElementById("result").innerText = "No more outputs";
    }
}

</script>

</body>
</html>
