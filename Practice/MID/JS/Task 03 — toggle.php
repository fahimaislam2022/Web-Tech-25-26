<!DOCTYPE html>
<html>
<head>
    <title>Dark/Light Mode</title>
</head>
<body id="page">

<button id="toggleBtn" onclick="changeMode()">Switch to Dark Mode</button>

<h1>My Portfolio</h1>
<p>Welcome to my website!</p>

<script>

var mode="light";

function changeMode(){

    var page=document.getElementById("page");
    var btn=document.getElementById("toggleBtn");

    if(mode==="light"){
        page.style.backgroundColor="black";
        page.style.color="white";
        btn.innerHTML="Switch to Light Mode";
        mode="dark";
    }
    else{
        page.style.backgroundColor="white";
        page.style.color="black";
        btn.innerHTML="Switch to Dark Mode";
        mode="light";
    }

}

</script>

</body>
</html>
