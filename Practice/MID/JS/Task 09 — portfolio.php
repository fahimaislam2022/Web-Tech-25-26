<!DOCTYPE html>
<html>
<head>
    <title>Interactive Portfolio</title>
</head>
<body id="page">

<button onclick="toggleTheme()" id="themeBtn">Dark Mode</button>

<h2 id="greet"></h2>

<a href="#" onclick="showSection('about')">About</a> |
<a href="#" onclick="showSection('projects')">Projects</a> |
<a href="#" onclick="showSection('contact')">Contact</a>

<div id="about">This is About section.</div>
<div id="projects" style="display:none;">This is Projects section.</div>

<div id="contact" style="display:none;">
    Name: <input type="text" id="cname"><span id="cnameErr"></span><br>
    Email: <input type="text" id="cemail"><span id="cemailErr"></span><br>
    Message: <textarea id="cmsg"></textarea><span id="cmsgErr"></span><br>
    <button onclick="validateContact()">Send</button>
</div>

<script>

var page=document.getElementById("page");
var mode="light";

function toggleTheme(){
    if(mode==="light"){
        page.style.backgroundColor="black";
        page.style.color="white";
        themeBtn.innerHTML="Light Mode";
        mode="dark";
    } else {
        page.style.backgroundColor="white";
        page.style.color="black";
        themeBtn.innerHTML="Dark Mode";
        mode="light";
    }
}

function showSection(sec){
    about.style.display="none";
    projects.style.display="none";
    contact.style.display="none";

    document.getElementById(sec).style.display="block";
}

var h=new Date().getHours();

if(h<12){ greet.innerHTML="Good Morning"; }
else if(h<18){ greet.innerHTML="Good Afternoon"; }
else { greet.innerHTML="Good Evening"; }

function validateContact(){

    cnameErr.innerHTML="";
    cemailErr.innerHTML="";
    cmsgErr.innerHTML="";

    var n=cname.value;
    var e=cemail.value;
    var m=cmsg.value;

    var ok=true;

    if(n===""){ cnameErr.innerHTML="Required"; ok=false; }
    if(e==="" || e.indexOf("@")===-1 || e.indexOf(".")===-1){ cemailErr.innerHTML="Invalid"; ok=false; }
    if(m.length<10){ cmsgErr.innerHTML="Min 10 chars"; ok=false; }

}

</script>

</body>
</html>
