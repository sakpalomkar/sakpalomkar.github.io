<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Indusups - Live Installation</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat';
    }
    body {
        overflow-x: hidden;
    }
    
/* GLOBAL */

.iu-page-body{
font-family: 'Montserrat';
margin:0;
padding:0;
}

/* HEADER */

.iu-header-section{
width:100%;
}

/* BREADCRUMB */

.iu-breadcrumb-section{
padding:80px 0;
text-align:center;
background-size:cover;
background-position:center;
position:relative;
color:#fff;
}

.iu-breadcrumb-section::after{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.6);
}

.iu-breadcrumb-content{
position:relative;
z-index:2;
}

.iu-breadcrumb-title{
font-size:45px;
font-weight:bold;
margin-bottom:10px;
}

.iu-breadcrumb-menu{
list-style:none;
display:flex;
justify-content:center;
gap:10px;
padding:0;
}

.iu-breadcrumb-menu li{
color:#fff;
}

.iu-breadcrumb-menu li::after{
content:">>";
margin-left:10px;
}

.iu-breadcrumb-menu li:last-child::after{
content:"";
}

/* GALLERY GRID */

.iu-gallery-container{
display:flex;
flex-wrap:wrap;
gap:20px;
padding:40px;
justify-content:center;
}

.iu-gallery-item{
width:22%;
}

.iu-gallery-card{
position:relative;
}

.iu-gallery-img{
width:100%;
border-radius:10px;
cursor:pointer;
}

/* LIGHTBOX */

.iu-lightbox{
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.9);
display:none;
justify-content:center;
align-items:center;
z-index:9999;
}

.iu-lightbox-img{
max-width:600px;
max-height:400px;
width: 100%;
border-radius:20px;
}

.iu-lightbox-close{
position:absolute;
top:70px;
right:340px;
font-size:60px;
color:#ff6600;
cursor:pointer;
}

.iu-lightbox-prev,
.iu-lightbox-next{
position:absolute;
top:45%;
font-size:30px;
color:#fff;
cursor:pointer;
}

.iu-lightbox-prev{
left:40px;
}

.iu-lightbox-next{
right:40px;
}

@media(max-width:900px){

.iu-gallery-item{
width:45%;
}

}

@media(max-width:500px){

.iu-gallery-item{
width:100%;
}

}

</style>

</head>


<body class="iu-page-body">

<?php include('navbar.php'); ?>


<!-- BREADCRUMB -->

<section class="iu-breadcrumb-section"
style="background:url(gallery/all/image2.jpg)">

<div class="iu-breadcrumb-content">

<h2 class="iu-breadcrumb-title">Live Installation</h2>

<ul class="iu-breadcrumb-menu">
<li>Home</li>
<li>Gallery</li>
<li>Live Installation</li>
</ul>

</div>

</section>



<!-- GALLERY -->

<section class="iu-gallery-container">

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s1.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s2.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s3.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s4.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s5.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s6.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s7.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s8.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s9.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s10.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s11.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s12.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s13.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s14.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s15.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s16.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s17.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s18.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s19.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s20.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s21.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s22.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s23.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s24.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s25.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s26.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s27.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s28.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s29.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s30.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s31.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s32.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s33.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s34.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s35.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s36.png"
class="iu-gallery-img">
</div>
</div>

<div class="iu-gallery-item">
<div class="iu-gallery-card">
<img src="gallery/live_installation/s37.png"
class="iu-gallery-img">
</div>
</div>



</section>



<!-- LIGHTBOX -->

<div class="iu-lightbox" id="iuLightbox">

<span class="iu-lightbox-close" id="iuCloseBtn">&times;</span>

<span class="iu-lightbox-prev" id="iuPrevBtn">&#10094;</span>

<img class="iu-lightbox-img" id="iuLightboxImg">

<span class="iu-lightbox-next" id="iuNextBtn">&#10095;</span>

</div>



<script>

const iuImages =
document.querySelectorAll('.iu-gallery-img');

const iuLightbox =
document.getElementById('iuLightbox');

const iuLightboxImg =
document.getElementById('iuLightboxImg');

let iuCurrentIndex = 0;



iuImages.forEach((img,index)=>{

img.addEventListener('click',()=>{

iuCurrentIndex=index;

showIUImage();

iuLightbox.style.display='flex';

});

});



function showIUImage(){

iuLightboxImg.src=
iuImages[iuCurrentIndex].src;

}



document.getElementById('iuPrevBtn').onclick=()=>{

iuCurrentIndex=
(iuCurrentIndex-1+iuImages.length)
%iuImages.length;

showIUImage();

};



document.getElementById('iuNextBtn').onclick=()=>{

iuCurrentIndex=
(iuCurrentIndex+1)
%iuImages.length;

showIUImage();

};



document.getElementById('iuCloseBtn').onclick=()=>{

iuLightbox.style.display='none';

};

</script>


<?php include('footer.php'); ?>


</body>
</html>