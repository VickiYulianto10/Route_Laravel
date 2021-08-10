<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style type="text/css">
		body{
			background: url('http://127.0.0.1:8000/pictures/iam.jfif');
			background-repeat: no-repeat;
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
/*		h1{
			background: -webkit-linear-gradient(30deg, #FFD700, #880000);
   			-webkit-background-clip: text;
   			-webkit-text-fill-color: transparent;
			text-align: center;
			position: absolute;
			top: 70%;
			right: 39%;
			font-size: 30px;
			font-weight: bold;
		}*/
		.card{
			position: absolute;
			top: 50%;
			left: 20%;
			transform: translate(-50%, -50%);
			height: 350px;
			width: 300px;
			border-radius: 10px;
			display: flex;
			flex-direction: column;
			align-items: center;
			background: rgba(0, 0, 0, 0.1);
			box-shadow: 0 0 10px rgba(0,0,0,1);
			color: #ffff;
			padding-top: 60px;
		}
		img{
			border-radius: 50%;
			width: 100px;
			height: 100px;
		}
		h4{
			position: relative;
			top: 10%;
			color: black;
		}
		h5{
			font-size: 15px;
			position: relative;
			top: 10%;
			color: black;
		}
		.btn{
			position: relative;
			top: 10%;
		}
		.card1{
			position: fixed;
			top: 50%;
			left: -300%;
			-webkit-transition: left 0.2s;
			transition: left 0.2s;
			transform: translate(-50%, -50%);
			height: 350px;
			width: 300px;
			border-radius: 10px;
			display: flex;
			flex-direction: column;
			align-items: center;
			background: rgba(0, 0, 0, 0.1);
			box-shadow: 0 0 10px rgba(0,0,0,1);
			color: #ffff;
			padding-top: 60px;
		}
		.slide-menu-tampil{
			left: 50% !important ;
		}
		.card1 h5{
			color: white;
		}
	</style>
</head>
<body>
	<div class="card">
		<img src="http://127.0.0.1:8000/pictures/aku.jfif">
		<h4> MOCH VICKI Y </h4>
		<h5> SMKN1PURWOSARI </h5>
		<button type="button" class="btn btn-primary">Biodata</button>
	</div>

	<div class="card1">
		<img src="http://127.0.0.1:8000/pictures/aku.jfif">
		<h5> NAMA  : MOCH VICKI Y </h5>
		<h5> TTL   : PASURUAN,10 JUNI 2003 </h5>
		<h5> NO.HP : 085859989565 </h5>
		<a href="{{ url('../route/my_account') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">EXIT</a>
	</div>


	<script type="text/javascript">
		$('.btn').click(function(){
	$('.card1').toggleClass("slide-menu-tampil");
	});
	</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>