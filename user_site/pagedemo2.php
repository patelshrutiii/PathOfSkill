<?php
require_once "header.php";
require_once "script.php";

?>
<style>
body {
  margin: 0px;
  font-family: 'Muli', sans-serif;
}
.carousel {
   width: 100%;
   overflow: scroll;
   padding: 30px;
   position: relative;
   box-sizing: border-box;
}
.carousel__container {
   white-space: nowrap;
   margin: 70px 0px;
   padding-bottom: 10px; 
}
.carousel-item {
   background-color: #caa5f1;
   width: 200px;
   height: 250px;
   border-radius: 20px;
   overflow: hidden;
   margin-right: 10px;
   display: inline-block;
   cursor: pointer;
   transition: 450ms all;
   transform-origin: center left;
   position: relative;
}
.carousel-item:hover ~ .carousel-item {
   transform: translate3d(100px, 0, 0);
}
.carousel__container:hover .carousel-item {
   opacity: 0.3;
}
.carousel__container:hover .carousel-item:hover {
   transform: scale(1.5);
   opacity: 1;
}
.carousel-item__img {
   width: 200px;
   height: 250px;
   object-fit: cover;
}
.carousel-item__details {
   background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 100%);
   font-size: 10px;
   color: white;
   opacity: 0;
   transition: 450ms opacity;
   padding: 10px;
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   text-align: center;
   white-space: normal;
   display: flex;
   flex-flow: row wrap;
   flex-direction: column;
   align-items: center;
   justify-content: flex-end;
}
.carousel-item__details:hover {
   opacity: 1;
}
.carousel-item__details--title {
  font-size: 15px;
}
.carousel-item__details--subtitle {
  
}
.carousel-item__details--icons {
  color: #caa5f1;
}
.carousel::-webkit-scrollbar {    
	height: 5px;
}

.carousel::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1); 
	border-radius: 10px;      
}
.carousel::-webkit-scrollbar-track-piece {
	max-width: 100px;
}
.carousel::-webkit-scrollbar-thumb {
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	background-color: gray;      
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <title>Carousel 2</title>
</head>
<body>
  <section class="carousel">
    <div class="carousel__container">
      <div class="carousel-item">
        <img class="carousel-item__img" src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="People">
        <div class="carousel-item__details">          
          <p class="carousel-item__details--title">Título descriptivo del vídeo en curso</p>
           <p class="carousel-item__details--subtitle">2019 16+ 114 minutos</p>
          <div class="carousel-item__details--icons">                  
               <i class="fa fa-2x fa-play-circle"></i>
               <i class="fa fa-2x fa-plus-circle"></i>
            
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>