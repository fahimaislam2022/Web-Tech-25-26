<!DOCTYPE html>
<html>
<head>
    <title>User Card</title>

    <style>
        .card{
            width: 250px;
            padding: 20px;
            border: 2px solid black;
            background-color: #f2f2f2;
            position: relative;
            border-radius: 10px;
        }
        .card img{
            width: 120px;
            border-radius: 10px;
        }
        .badge{
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: green;
            padding: 5px;
            color: white;
        }
    </style>

</head>

<body>

<div class="card">
    <div class="badge">Online</div>
    <img src="user.jpg">
    <h3>User Name</h3>
    <p>Short bio about the user.</p>
</div>

</body>
</html>
