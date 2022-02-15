<!DOCTYPE html>
<html>
<head>
	<title>Tribal Chief login and signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}
	.logo{
    height: 100px;
    width: 100px;
    border: 15px solid black;
    border-top-color: red;
    border-bottom-color: yellow;
    border-radius: 50%;
    animation: 600ms infinite loading;
    margin: 30px;
  }
  
  @keyframes loading {
    0% {
      transform: rotateZ(0deg);
    }
    25% {
      transform: rotateZ(90deg);
    }
    50% {
      transform: rotateZ(180deg);
    }
    75% {
      transform: rotateZ(270deg);
    }
    100% {
      transform: rotateZ(360deg);
    }
  }

</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">TRIBAL CHIEF</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img id="night" src="http://1.bp.blogspot.com/_7-b4ZWNPaD8/TThuPK0cvUI/AAAAAAAAAAQ/jCqRshKkJd4/s1600/night-scene.jpg" class="img-rounded" title="night" width="650px" height="565px">
            <img id="day" src="http://media1.santabanta.com/full1/Events/Independence%20Day/independence-day-67a.jpg" class="img-rounded" title="day" width="650px" height="565px">
			<img id="afternoon" src="https://c4.wallpaperflare.com/wallpaper/516/762/505/sky-la-defense-sunset-afternoon-wallpaper-preview.jpg" class="img-rounded" title="afternoon" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what People are talking about.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the Conversation.</strong></h3></div>
		</div>
		<div class="col-sm-6" style="left:8%;">
		    <h1 class="logo"><span style="font-size: 50px; font-family: sans-serif; color: rgb(255, 7, 143);">NS</span></h1>
			<!-- <img src="images/1638616862515BS.jpeg" class="img-rounded" title="Coding cafe" width="80px" height="80px"> -->
			<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4><strong>BELIVE THAT!!.</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
<script>
   $( document ).ready(function() {  
    SetImage();
    window.setInterval(SetImage,1000);
});

function SetImage(){     
    var nowdate = new Date() ;
    
    var waketime = new Date();     
    waketime.setHours(6);
    waketime.setMinutes(30);
    
	var aftertime = new Date();
	aftertime.setHours(12);
	aftertime.setMinutes(30);

    var bedtime = new Date();     
    bedtime.setHours(18);
    bedtime.setMinutes(30);
    
    if(waketime < nowdate  && nowdate < aftertime){
         $('#day').show();
		 $('#afternoon').hide();
         $('#night').hide();
    }else if(aftertime < nowdate  && nowdate < bedtime){
		 $('#day').hide();
		 $('#afternoon').show();
         $('#night').hide();
	}else{
         $('#day').hide();
		 $('#afternoon').hide();
		 $('#night').show();
    }
}
</script>
</body>
</html>