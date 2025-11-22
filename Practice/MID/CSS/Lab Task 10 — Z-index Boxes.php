<!DOCTYPE html>
<html>
<head>
    <title>Z-index</title>

    <style>
        .box{
            width: 150px;
            height: 150px;
            position: absolute;
            color: white;
            padding: 10px;
        }
        #b1{ background-color: red; top: 50px; left: 50px; z-index: 1; }
        #b2{ background-color: blue; top: 90px; left: 90px; z-index: 2; }
        #b3{ background-color: green; top: 130px; left: 130px; z-index: 3; }
    </style>

</head>

<body>

<div id="b1" class="box">Box 1</div>
<div id="b2" class="box">Box 2</div>
<div id="b3" class="box">Box 3</div>

</body>
</html>
