<!DOCTYPE html>
<html>
<head>
    <title>Style Manipulation</title>
</head>
<body>

<p id="text">This is sample text.</p>

<button onclick="bgChange()">Change Background Color</button>
<button onclick="increaseSize()">Increase Font Size</button>
<button onclick="centerText()">Center Text</button>
<button onclick="resetStyle()">Reset Style</button>

<script>

var size=16;

function bgChange(){
    document.getElementById("text").style.backgroundColor="yellow";
}

function increaseSize(){
    size+=2;
    document.getElementById("text").style.fontSize=size+"px";
}

function centerText(){
    document.getElementById("text").style.textAlign="center";
}

function resetStyle(){
    size=16;
    var t=document.getElementById("text");
    t.style.backgroundColor="";
    t.style.fontSize="16px";
    t.style.textAlign="left";
}

</script>

</body>
</html>
