<!DOCTYPE html>
<html>
<head>
    <title>Text Analyzer</title>
</head>
<body>

<textarea id="text" rows="8" cols="50"></textarea><br>
<button onclick="analyze()">Analyze Text</button>

<div id="result"></div>

<script>

function analyze(){

    var t=document.getElementById("text").value.trim();

    if(t===""){
        document.getElementById("result").innerHTML="";
        return;
    }

    var chars=t.length;
    var words=t.split(/\s+/).filter(x=>x!=="").length;
    var rev=t.split("").reverse().join("");

    document.getElementById("result").innerHTML=
    "Characters: "+chars+"<br>"+
    "Words: "+words+"<br>"+
    "Reversed: "+rev;
}

</script>

</body>
</html>
