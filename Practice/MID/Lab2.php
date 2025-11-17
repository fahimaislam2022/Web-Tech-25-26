<!DOCTYPE html>
<html>
    <head>
        <tittle>Lab2odd</title>

        <style>
        body {
            background-color: #3ff5ffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px 0;
        }
         .container {
            width: 500px;
            background-color: white;
            margin: 20px auto;
            padding: 25px 35px;
            border-radius: 12px;

            
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            }
        label {
            font-weight: bold;
        }
        
        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 18px;
            border-radius: 6px;
            font-size: 14px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #2e476eff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 14px;
        }
        .success-box {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-size: 15px;
        }
        .course-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 6px;
            margin-top: 12px;
            border: 1px solid #ddd;
        }
        .delete-btn {
            background-color: #f10b0bff;
            color: darkred;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
         </style>
</head>
<body>
    <div class="container">

    <h1>Student Registration</h1>
    
    <label>Full Name</label>
    <input type="text" id="fullname">
     
    <label>Email</label>
    <input type="text" id="email">

     <label>Password</label>
    <input type="password" id="password">

     <label>Confrim Password</label>
    <input type="password" id="confrimpassword">

    <button oneclick="registerstudent()">Register</button>

    <div id="successmessage"></div>
</div>



    <div class="contatiner">
    <h1>Course Registration</h1>
    <label>Course Name</label>
    <input type="text" id="courseinput">
    <button oneclick="addCourse()">Add Course</button>

    <div id="courselist"></div>
</div>



    <script>
        function registerstudent(){
            var name=document.getElementById("fullname").value;
            var email=document.getElementById("email").value;
            var password=document.getElementById("password").value;
            var confrimpassword=document.getElementById("confrimpassword").value;


            if(name === "" || email === "" || password === "" || confrimpassword === ""){
                alert("Fill it properly!!");
                return;
            }
           
            if(!email.includes("@")){
                alert("Invaild email");
                return;
            }

            if(pass !== confpass){
                alert("incorrect password");
                return;
            }

            msgBox.innerHTML ='
            <div class="success-box">
            <strong>Registration successful!</strong><br><br>
            <b>Name</b> ${name}<br>
            <b>Email</b> ${email}
            </div>
            ':

        }
        funtion addcourse(){
            var courseName = docment.getElementById("CourseInput").value;
            var courselist = docment.getElementById("CourseList");

            if (courseName === "") {
         alert("Please enter a course name");
         return;
            }
              var div = document.createElement("div");
           div.className = "course-item";
           var text = document.createElement("span");
         text.innerHTML = courseName;
         var delBtn = document.createElement("button");
    delBtn.classname = "delete-btn";
    delBtn.innerHTML = "Delete";
    delBtn.onclick = function () {
        div.remove();
    };
    div.appendChild(text);
    div.appendChild(delBtn);
    courselist.appendChild(div);

  
    document.getElementById("courseInput").value = "";
    
        }
</script>

</body>
</html>