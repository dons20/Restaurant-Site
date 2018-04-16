<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto|Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.carousel {
	margin: 25px 0 50px;
    background: #fff;
	position: relative;
	padding: 8px;
	box-shadow: 0 0 1px rgba(0,0,0,0.3);
}
.carousel:before, .carousel:after {
	z-index: -1; 
	position: absolute; 
	content: "";
	bottom: 15px;
	left: 10px;
	width: 50%; 
	top: 80%;
	max-width: 400px;
	background: rgba(0, 0, 0, 0.7); 
	box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
	transform: rotate(-3deg);
}
.carousel:after {
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
.carousel .item {	
    text-align: center;
	min-height: 314px;
}
.carousel .item img {
	max-width: 100%;
    margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
}
.carousel .carousel-control {
	width: 27px;
	height: 54px;
	overflow: hidden;
	opacity: 1;
	margin: auto 0;
	background: none;
	text-shadow: none;
}
.carousel .carousel-control span {
	width: 54px;
    height: 54px;
	display: inline-block;
    background: #4a4a4a;    
    border-radius: 50%;
    box-shadow: 0 0 1px rgba(0,0,0,0.3);
}
.carousel .carousel-control.left span {
	margin-right: -27px;
}
.carousel .carousel-control.right span {
	margin-left: -27px;
}
.carousel .carousel-control:hover span {
	background: #3b3b3b;
}
.carousel .carousel-control i {
    font-size: 24px;
    margin-top: 13px;
}
.carousel .carousel-control.left {
	margin-left: -28px;
}
.carousel .carousel-control.right {
	margin-right: -28px;
}
.carousel .carousel-control.left i {
	margin-left: -24px;
}
.carousel .carousel-control.right i {
	margin-right: -24px;
}
.carousel-indicators {
	bottom: -42px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	border-radius: 50%;
	margin: 1px 4px;
}
.carousel-indicators li {
	border: 1px solid #475c6f;
}
.carousel-indicators li.active {
	background: #20b0b9;
	border-color: #20b0b9;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
} 

li {
    border-right: 1px solid #bbb;
}

li:last-child {
    border-right: none;
} 

ul {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}

</style>
</head>
<body>

<ul>
	<li position: sticky;></li>
	<li><a href="#home">Asia's Cafe</a></li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">What's New</a></li>
  <li><a href="#contact">About</a></li>
  <li style="float:right"><a href="#about">Place Order</a></li>
</ul>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
				<div class="item carousel-item active">
				<img src="C:\Users\danie\Downloads/ApplePastriesYT-copy.jpg" alt="">
			</div>
			<div class="item carousel-item">
				<img src="C:\Users\danie\Downloads/58c7c903288f88.77084931.jpg" alt="">
			</div>
			<div class="item carousel-item">
				<img src="C:\Users\danie\Downloads/Christmas-Star-Twisted-Bread_EXPS_THN16_190439_C06_21_2b.jpg" alt="">
			</div>						
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>



<!--<div class="item carousel-item active">
						<img src="C:\Users\danie\Downloads/ApplePastriesYT-copy.jpg" alt="">
					</div>
					<div class="item carousel-item">
						<img src="C:\Users\danie\Downloads/58c7c903288f88.77084931.jpg" alt="">
					</div>
					<div class="item carousel-item">
						<img src="C:\Users\danie\Downloads/Christmas-Star-Twisted-Bread_EXPS_THN16_190439_C06_21_2b.jpg" alt="">
					</div>-->