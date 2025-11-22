
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Management System</title>
</head>
<body>
    <h1>Student Grade Management System</h1>
    <p>Track and manage student grades efficiently</p>

    <!-- Input Section -->
    <h2>Add New Student</h2>
    <input type="text" id="studentName" placeholder="Enter student name"><br><br>

    <input type="number" id="studentGrade" placeholder="Enter grade 0-100"><br><br>
    <button onclick="addStudent()">Add Student</button>
    <button onclick="clearAll()">Clear All</button>

    <!-- Action Section -->
    <h2>Actions</h2>
    <button onclick="doubleAllGrades()">Double All Grades</button>
    <button onclick="resetGrades()">Reset Grades</button>
    <button onclick="sortStudents()">Sort by Grade</button>

    <!-- Student List Section -->
    <h2>Student List</h2>
    <ul id="studentList"><li>No students added yet</li></ul>

    <!-- Statistics Section -->
    <h2>Statistics</h2>
    <div id="statistics">No students added yet</div>

    <script>
        let students = [];

        function addStudent() {
            let nameInput = document.getElementById('studentName');
            let gradeInput = document.getElementById('studentGrade');

            let name = nameInput.value.trim();
            let grade = Number(gradeInput.value);

            // Validation with visual feedback
            if (!name || isNaN(grade) || grade < 0 || grade > 100) {
                alert("Enter valid name and grade (0-100)");
                if (!name) nameInput.style.border = "2px solid red"; else nameInput.style.border = "";
                if (isNaN(grade) || grade < 0 || grade > 100) gradeInput.style.border = "2px solid red"; else gradeInput.style.border = "";
                return;
            }

            nameInput.style.border = "";
            gradeInput.style.border = "";

            students.push({ name: name, grade: grade, original: grade });

            nameInput.value = "";
            gradeInput.value = "";

            updateStudentList();
            updateStatistics();
        }

        function removeStudent(index) {
            students.splice(index, 1);
            updateStudentList();
            updateStatistics();
        }

        function gradeLetter(grade) {
            if (grade >= 90) return 'A';
            if (grade >= 80) return 'B';
            if (grade >= 70) return 'C';
            if (grade >= 60) return 'D';
            return 'F';
        }

        function updateStudentList() {
            let list = document.getElementById('studentList');
            list.innerHTML = "";

            if (students.length === 0) {
                list.innerHTML = "<li>No students added yet</li>";
                return;
            }

            students.forEach((s, i) => {
                let li = document.createElement('li');
                li.innerHTML = `${s.name}: ${s.grade} points (${gradeLetter(s.grade)}) 
                                <button onclick="removeStudent(${i})">Remove</button>`;
                list.appendChild(li);
            });
        }

        function updateStatistics() {
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
            updateStudentList();
            updateStatistics();
        }

        function doubleAllGrades() {
            students.forEach(s => s.grade = Math.min(s.grade*2, 100));
            updateStudentList();
            updateStatistics();
        }

        function resetGrades() {
            students.forEach(s => s.grade = s.original);
            updateStudentList();
            updateStatistics();
        }

        function sortStudents() {
            students.sort((a,b) => b.grade - a.grade);
            updateStudentList();
        }
    </script>
</body>
</html>
