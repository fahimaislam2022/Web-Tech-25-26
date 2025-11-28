<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Clock</title>
</head>
<body>

<center>
    <div id="clock"></div>
</center>

<script>

setInterval(function(){

    var d=new Date();
    var h=d.getHours();
    var m=d.getMinutes();
    var s=d.getSeconds();

    var ampm = h>=12 ? "PM" : "AM";
    h = h%12;
    if(h===0){h=12;}

    document.getElementById("clock").innerHTML=
    h+":"+(m<10?"0"+m:m)+":"+(s<10?"0"+s:s)+" "+ampm;

},1000);

</script>

</body>
</html>
