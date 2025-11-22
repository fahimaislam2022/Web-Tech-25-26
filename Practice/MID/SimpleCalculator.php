<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h2>Calculator</h2>
  <input type="number" id="num1" placeholder="Number 1">
  <input type="number" id="num2" placeholder="Number 2">
  <button onclick="calculate()">Add</button>
  <p>Result: <span id="result">0</span></p>

  <script>
    function calculate() {
      let a = Number(document.getElementById('num1').value);
      let b = Number(document.getElementById('num2').value);
      document.getElementById('result').textContent = a + b;
    }
  </script>
</body>
</html>