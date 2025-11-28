<!DOCTYPE html>
<html>
<head>
    <title>Image Slider</title>
</head>
<body>

<img id="mainImg" width="400">

<br><br>

<button onclick="prevImg()">Previous</button>
<button onclick="nextImg()">Next</button>

<script>

var images=[
    "https://picsum.photos/id/1018/600/400",
    "https://picsum.photos/id/1025/600/400",
    "https://picsum.photos/id/1039/600/400"
];

var index=0;
document.getElementById("mainImg").src=images[index];

function nextImg(){
    index++;
    if(index===images.length){ index=0; }
    document.getElementById("mainImg").src=images[index];
}

function prevImg(){
    index--;
    if(index<0){ index=images.length-1; }
    document.getElementById("mainImg").src=images[index];
}

setInterval(function(){
    nextImg();
},3000);

</script>

</body>
</html>
