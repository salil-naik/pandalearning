<?php
echo
'<!doctype html>
<html>
	<head>
		<title>Hackathon</title>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!--script>
	      var aAudio = new Audio("music/inquilab.mp3");

	      function myAudioFunction()
	 		 {
	        aAudio.play();
	      }
	  </script-->


		<style>
		html,body,cont{height:100%;}

		div.cont
		{
			position:relative;
			top:0px;
			height:100%;
			width:100%;
			background-image:url(images/b6.jpg);
			background-size:cover;
			background-repeat:none;
		}
		.info
		{
			font-family: "Roboto", sans-serif;
		}

		.info h1
		{
			color:#48af4b;
			font-family: "Lato", sans-serif;
			font-size:45px;
		}

		.button
		{
			width:130px;
			text-align:center;
			background-color:#48af4b;
			border-radius:18px;
			padding:6px;
			color:white;
			cursor:pointer;
		}

		.button:hover
		{
			background-color:white;
			color:#48af4b;
			transition:0.5s;
		}

		h2
		{
			font-size:50px;
			color:#48af4b;
			font-family: "Lato", sans-serif;

		}

		.cats
		{
			position:relative;
			font-family: "Lato", sans-serif;
		}

		.cats-card{width:100%;background-color:#fff;border-radius:15px; padding:20px;
			box-shadow:5px 5px 5px 5px #f9f9f9;
			position:relative;
			top:0px;left:0px;
				}


		h3{font-size:30px;color:#48af4b;margin:20px 0px;}

		.cats-info
		{
			font-family: "Roboto", sans-serif;
			color:#666;
		}

		.cats .button
		{
			margin:20px 0px 10px 0px;
		}

		.img_cont
		{
			height:80px;width:80px;
			background-color:#48af4b;
			border-radius:50%;
			position:absolute;
			top:-30px;
			left:-50px;
		}

		.img_cont img{width:50px;height:50px;display:block;margin:auto;margin-top:15px;}

		@media only screen and (max-width:768px)
		{
			.info
			{
				position:absolute;
				top:100px;
				width:100%;
				padding:20px;
				color:white;

			}

			h2
			{
				margin-left:20px;
			}
		}

		@media only screen and (min-width:769px)
		{

			.main_img
			{
				width:100%;
			}

			.info
			{
				position:absolute;
				width:450px;
				height:auto;
				color:white;
				top:200px;
				left:100px;
				z-index:3;
				line-height:25px;
				font-size:17px;
			}

			h2
			{
				margin-bottom:30px;
				text-align:center;
				width:100%;
			}

			.cats p
			{
				width:600px;
				color:#444;
				margin:auto;
				font-size:25px;
				margin-bottom:40px;
				text-align:center;
				font-family: "Roboto", sans-serif;
			}

			.cats-cover{padding:100px;width:100%;}

			.cats-cover .width-6{padding:20px;}

		}
		</style>';

include('nav.html');


echo
'
<main style="height:100%;">

<div class="cont">

<div class="info">
	<h1>Learn <span style="color:white">Online</span></h1>
	<p>
	<b>Tell us why you want to learn to code, We’ll show you what to learn.</b><br><br>Panda is an online learning platform which guides you to follow your passion. Our learning paths are designed to help the young minds go in a particular direction.
	</p>

	<a href=""><div class="button">Get Started</div></a>
</div>

</div>

<div class="cats">
	<h2>Learning Paths</h2>
	<p>Learning Paths are a great tool for learning the fundamentals. With Paths you&#39;ll be able to develop a deeper knowledge and refine your skills along a set learning journey built by our team. Paths are not paced, so you can learn in a slower or quicker pace depending on the time commitment you&#39;re able to make.
	</p>

	<div class="cats-cover">
	<div class="width-6">
		<div class="cats-card">
		<div class="img_cont">
			<img src="images/icon1.png" class="cats_img">
		</div>
			<h3>Front End Development</h3>
			<div class="cats-info">Front-end web development, also known as client-side development is the practice of producing HTML, CSS and JavaScript for a website or Web Application so that a user can see and interact with them directly.</div>
			<a href="fe.php"><div class="button">Start Course</div></a>
		</div>
	</div>

	<div class="width-6">
		<div class="cats-card">
			<div class="img_cont">
				<img src="images/icon2.png" class="cats_img">
			</div>
			<h3>Back End Development</h3>
			<div class="cats-info">This type of web development usually consists of three parts: a server, an application, and a database. Code written by back end developers is what communicates the database information to the browser.</div>
			<a href="be.php"><div class="button">Start Course</div></a>
		</div>
	</div>

	</div>

</div><!--cats-->
</main>
';

include('footer.html');

?>
