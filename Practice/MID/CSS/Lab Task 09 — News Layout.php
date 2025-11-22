<!DOCTYPE html>
<html>
<head>
    <title>Layout</title>

    <style>
        .side, .main, .ad{
            display: inline-block;
            vertical-align: top;
            padding: 10px;
            border: 2px solid black;
            margin: 5px;
        }
        .side{ width: 20%; background-color: lightyellow; }
        .main{ width: 60%; background-color: lightblue; }
        .ad{ width: 20%; background-color: lightgreen; }
    </style>

</head>

<body>

<div class="side">
    <h3>Sidebar</h3>
    <p>Categories...</p>
</div>

<div class="main">
    <h3>Main Content</h3>
    <p>Article text...</p>
</div>

<div class="ad">
    <h3>Ads</h3>
    <p>Advertisement content...</p>
</div>

</body>
</html>
