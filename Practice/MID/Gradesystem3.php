<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        input, button { margin: 5px; padding: 5px; }
        #studentList li { margin-bottom: 5px; }
        .error { border: 2px solid red; }
        h1, h2 { margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>Student Grade Management System</h1>

    <!-- Input Section -->
    <h2>Add New Student</h2>
    <input type="text" id="studentName" placeholder="Enter student name">
    <input type="number" id="studentGrade" placeholder="Enter grade 0-100">
    <button onclick="addStudent()">Add Student</button>
    <button onclick="clearAll()">Clear All</button>

    <!-- Student List Section -->
    <h2>Student List</h2>
    <ul id="studentList"><li>No students added yet</li></ul>

    <!-- Statistics Section -->
    <h2>Statistics</h2>
    <div id="statistics">No students added yet</div>

    <!-- Action Section -->
    <button onclick="doubleAllGrades()">Double All Grades</button>
    <button onclick="resetGrades()">Reset Grades</button>

    <script>
        let students = [];

        function addStudent() {
            let name = document.getElementById('studentName').value.trim();
            let grade = Number(document.getElementById('studentGrade').value);

            if (!name || isNaN(grade) || grade < 0 || grade > 100) {
                alert("Enter valid name and grade (0-100)");
                return;
            }

            students.push({ name: name, grade: grade, original: grade });
            document.getElementById('studentName').value = "";
            document.getElementById('studentGrade').value = "";

            updateList();
            updateStats();
        }

        function updateList() {
            let list = document.getElementById('studentList');
            list.innerHTML = "";
            if (students.length === 0) {
                list.innerHTML = "<li>No students added yet</li>";
                return;
            }
            for (let s of students) {
                let li = document.createElement('li');
                li.textContent = `${s.name}: ${s.grade} points`;
                list.appendChild(li);
            }
        }

        function updateStats() {
            let stats = document.getElementById('statistics');
            if (students.length === 0) {
                stats.textContent = "No students added yet";
                return;
            }
            let grades = students.map(s => s.grade);
            let total = students.length;
            let avg = (grades.reduce((a,b)=>a+b,0)/total).toFixed(2);
            let high = Math.max(...grades);
            let low = Math.min(...grades);
            let passRate = ((grades.filter(g=>g>=50).length/total)*100).toFixed(2);

            stats.innerHTML = `
                Total Students: ${total} <br>
                Average Grade: ${avg} <br>
                Highest Grade: ${high} <br>
                Lowest Grade: ${low} <br>
                Pass Rate: ${passRate}%
            `;
        }

        function clearAll() {
            students = [];
            updateList();
            updateStats();
        }

        function doubleAllGrades() {
            for (let s of students) s.grade = Math.min(s.grade*2, 100);
            updateList();
            updateStats();
        }

        function resetGrades() {
            for (let s of students) s.grade = s.original;
            updateList();
            updateStats();
        }
    </script>
</body>
</html>