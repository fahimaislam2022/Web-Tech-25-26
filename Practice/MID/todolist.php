<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
</head>
<body>
  <h2>To-Do List</h2>
  <input type="text" id="task" placeholder="Enter task">
  <button onclick="addTask()">Add</button>
  <ul id="list"></ul>

  <script>
    function addTask() {
      const task = document.getElementById('task').value;
      if(task === "") return;
      const li = document.createElement('li');
      li.textContent = task;
      document.getElementById('list').appendChild(li);
      document.getElementById('task').value = "";
    }
  </script>
</body>
</html>