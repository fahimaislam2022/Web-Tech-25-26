<!DOCTYPE html>
<html>
<head>
    <title>Z-index</title>

    <style>
        .box{
           
            position: absolute;
           
        }
        #b1{ background-color: red; top: 50px; left: 50px; z-index: 1; }
        #b2{ background-color: blue; top: 60px; left: 60px; z-index: 2; }
        #b3{ background-color: green; top: 70px; left: 70px; z-index: 3; }
    </style>

</head>

<body>

<div id="b1" class="box">Box 1</div>
<div id="b2" class="box">Box 2</div>
<div id="b3" class="box">Box 3</div>

</body>
</html>
