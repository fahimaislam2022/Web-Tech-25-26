<!DOCTYPE html>
<html>
<head>
  <title>Background Changer</title>
</head>
<body>
  <h2>Change Background Color</h2>
  <button onclick="changeColor('red')">Red</button>
  <button onclick="changeColor('blue')">Blue</button>
  <button onclick="changeColor('green')">Green</button>

  <script>
    function changeColor(color) {
      document.body.style.backgroundColor = color;
    }
  </script>
</body>
</html>