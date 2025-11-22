<!DOCTYPE html>
<html>
<head>
  <title>Toggle Text</title>
  <style>
    .hidden { display: none; }
  </style>
</head>
<body>
  <h2>Toggle Text</h2>
  <p id="text">This is a secret message!</p>
  <button onclick="toggleText()">Show/Hide</button>

  <script>
    function toggleText() {
      const t = document.getElementById('text');
      t.classList.toggle('hidden');
    }
  </script>
</body>
</html>