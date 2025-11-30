<!DOCTYPE html>
 
<html>
 
<body>
 
<button onclick="showOutput()">Click</button>
 
<p id="out"></p>
 
<script>
 
let n = 0;
 
function showOutput() { n++;
 
switch(n) {
 
case 1: document.getElementById("out").innerText = "A"; break;
 
case 2: document.getElementById("out").innerText = "B"; break;
 
case 3: document.getElementById("out").innerText = "A B"; break;
 
case 4: document.getElementById("out").innerText = "C"; break;
 
case 5: document.getElementById("out").innerText = "B C"; break;
 
case 6: document.getElementById("out").innerText = "A C"; break;
 
case 7: document.getElementById("out").innerText = "A B C"; break;
 
case 8: document.getElementById("out").innerText = "APPLE"; break;
 
case 9: document.getElementById("out").innerText = "BANANA"; break; 
 
case 10: document.getElementById("out").innerText = "END"; break;
 
default: document.getElementById("out").innerText= "No more output"; }
 
}
 
</script>
 
</body>
 
</html>