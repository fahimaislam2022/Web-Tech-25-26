<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Management System</title>
    <style>
        body { font-family: Georgia, serif; margin: 20px; }
        input { margin: 5px; padding: 5px; }
        button { margin: 5px; padding: 5px 10px; }
        #studentList li { margin-bottom: 5px; }
        .error { border: 2px solid red; }
        h1, h2, h3 { margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>Student Grade Management System</h1>
    <p>Track and manage student grades efficiently</p>

    <!-- Input Section -->
    <h2>Add New Student</h2>
    <div>
        <label>Student Name: </label>
        <input type="text" id="studentName" placeholder="Enter student name">
        <br>
        <label>Grade (0-100): </label>
        <input type="number" id="studentGrade" placeholder="Enter grade">
        <br>
        <button onclick="addStudent()">Add Student</button>
        <button onclick="clearAll()">Clear All</button>
    </div>

    <!-- Statistics Section -->
    <h2>Statistics</h2>
    <div id="statistics">No students added yet</div>

    <!-- Student List Section -->
    <h2>Student List</h2>
    <ul id="studentList">
        <li>No students added yet</li>
    </ul>

    <!-- Action Section -->
    <div>
        <button onclick="doubleAllGrades()">Double All Grades</button>
        <button onclick="resetGrades()">Reset Grades</button>
    </div>

    <script>
        let students = [];

        function addStudent() {
            const nameInput = document.getElementById('studentName');
            const gradeInput = document.getElementById('studentGrade');

            const name = nameInput.value.trim();
            const grade = Number(gradeInput.value);

            if(name === "" || gradeInput.value === "" || isNaN(grade) || grade < 0 || grade > 100){
                alert("Enter a valid name and grade (0-100)");
                if(name === "") nameInput.classList.add('error'); else nameInput.classList.remove('error');
                if(gradeInput.value === "" || grade < 0 || grade > 100) gradeInput.classList.add('error'); else gradeInput.classList.remove('error');
                return;
            }

            nameInput.classList.remove('error');
            gradeInput.classList.remove('error');

            students.push({name: name, grade: grade, originalGrade: grade});

            nameInput.value = "";
            gradeInput.value = "";

            updateStudentList();
            updateStatistics();
        }

        function updateStudentList() {
            const list = document.getElementById('studentList');
            list.innerHTML = "";

            if(students.length === 0){
                const li = document.createElement('li');
                li.textContent = "No students added yet";
                list.appendChild(li);
                return;
            }

            students.forEach(student => {
                const li = document.createElement('li');
                li.textContent = `${student.name}: ${student.grade} points`;
                list.appendChild(li);
            });
        }

        function updateStatistics() {
            const statsDiv = document.getElementById('statistics');

            if(students.length === 0){
                statsDiv.textContent = "No students added yet";
                return;
            }

            const total = students.length;
            const grades = students.map(s => s.grade);
            const avg = (grades.reduce((a,b)=>a+b,0)/total).toFixed(2);
            const high = Math.max(...grades);
            const low = Math.min(...grades);
            const passRate = ((grades.filter(g=>g>=50).length/total)*100).toFixed(2);

            statsDiv.innerHTML = `
                Total Students: ${total} <br>
                Average Grade: ${avg} <br>
                Highest Grade: ${high} <br>
                Lowest Grade: ${low} <br>
                Pass Rate: ${passRate}%
            `;
        }

        function clearAll() {
            if(students.length === 0){ alert("No students to clear."); return; }
            students = [];
            updateStudentList();
            updateStatistics();
        }

        function doubleAllGrades() {
            if(students.length === 0){ alert("No students to update."); return; }
            students.forEach(s => s.grade = Math.min(s.grade*2, 100));
            updateStudentList();
            updateStatistics();
        }

        function resetGrades() {
            if(students.length === 0){ alert("No students to reset."); return; }
            students.forEach(s => s.grade = s.originalGrade);
            updateStudentList();
            updateStatistics();
        }
    </script>
</body>
</html>