<?php 
	require_once'menu.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Equipe</title>
 	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<style type="text/css">
	.wrapper{
		max-width:95%;
		height: 400px;
		overflow: hidden;
	}
	.game .play{
	background-color: rgba(0,0,0,0.9);
	text-decoration: none;
	float: right;
	cursor: pointer;
  	position: absolute;
  	top: 30%;
  	width: auto;
  	marksrgin-top: -22px;
  	padding: 16px;
  	color: white;
  	font-weight: bold;
  	font-size: 18px;
  	transition: 0.6s ease;
  	border-radius: 0 3px 3px 0;
	}
	.game .sound{
		background-color: rgba(0,0,0,0.9);
		text-decoration: none;
		cursor: pointer;
		position: absolute;
		top: 43%;
		width: auto;
		margin-top: 22px;
		padding:16px;
		color: green;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
	}
	.game .sign{
		background-color: rgba(0,0,0,0.9); 
		text-decoration: none;
		cursor: pointer;
		position: absolute;
		top: 55%;
		width: auto;
		margin-top: 42px;
		padding:16px;
		color: blue;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
	}
	.play:hover, .sound:hover, .sign:hover {
  		background-color: rgba(0,0,0,0.8);
	}
	.gradient{
	 background-image: linear-gradient(to bottom, #0999c5, #ffffff);
	}
	.gradient-2{
	 background-image: linear-gradient(to bottom, #ffffff, #ffffff);
	}
</style>
 	
 </head>
 <body>
  	
	 <div class="container"> 	
	 	<div class="w3-content w3-section wrapper" >
		  <img class="mySlides" src="image/equipe/adauto1.jpg" style="width:40%" >
		  <img class="mySlides" src="image/equipe/alessandra1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/deyvid1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/elinalda1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/kaline1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/marcela1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/odin1.jpg" style="width:40%">
		  <img class="mySlides" src="image/equipe/polly1.jpg" style="width:40%">
		</div>
	 </div>
  </body>
 <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
 </html>
 <?php 
 require_once'footer.php' ?>