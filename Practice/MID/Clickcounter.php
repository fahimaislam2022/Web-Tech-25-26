<!DOCTYPE html>
<html>
<head>
  <title>Click Counter</title>
</head>
<body>
  <h2>Click Counter</h2>
  <button id="counterBtn">Click Me!</button>
  <p>Clicks: <span id="count">0</span></p>

  <script>
    let count = 0;
    const btn = document.getElementById('counterBtn');
    const display = document.getElementById('count');

    btn.onclick = function() {
      count++;
      display.textContent = count;
    }
  </script>
</body>
</html>