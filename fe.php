<?php
echo
'<!doctype html>
<html>
	<head>
		<title>Front End Path</title>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<title>FRONTEND dev </title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<style>
		html,body,cont{height:100%;}


		</style>';

include('nav.html');


echo
'
<main style="height:100%;">

<div style="height:300px;background-image:url(images/abtbg.jpg);background-size:cover;line-height:340px;text-align:center;font-size:60px;color:white;font-family: "Lato", sans-serif;">
Learning Paths
</div>

<div class="container">
	<div class="row">
	<div class="text-area">
		<h5 style="position: relative;top: 30px;color: #aeaeae;">Course</h5>
		<h3 style="color: #48af4b;">Front End <br><span style="font-weight: 100;">Development</span></h3>
		<div class="col s12 m6 ">
		<p style="    margin-top: -15px;margin-left: -10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodauteiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>


	</div>

	</div>
	<div class="row">
				<div class="col s12 m6 " >
					<div class="card-panel cust-card" style="border-radius: 15px; margin-left: 38px; padding-bottom: 50px;">
						<div class="cir" style="float:left;" >
							<img src="images/notpython.png" class="cir-icon"
							style="align-items: center;">
						</div>

						<h4 style="	position: relative;left: -45px;">HTML5 <br><span style="font-weight: 200;">Basic to Advanced</span> </h4>

						<p style="	position: relative;margin-left: 57px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" style="float: right;">Get started</a>
				 </div>
				</div>

				<div class="col s12 m6 " >
					<div class="card-panel cust-card" style="border-radius: 15px; margin-left: 38px; padding-bottom: 50px;">
						<div class="cir" style="float:left;" >
							<img src="images/css3.png" class="cir-icon"
							style="align-items: center;">
						</div>
						<h4 style="	position: relative;left: -45px;" >CSS3 <br><span style="font-weight: 200;">Basic to Advanced</span> </h4>

						<p style="	position: relative;margin-left: 57px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" style="float: right;">Get started</a>
				 </div>
				</div>

				<div class="col s12 m6 " >
					<div class="card-panel cust-card" style="border-radius: 15px; margin-left: 38px; padding-bottom: 50px;">
						<div class="cir" style="float:left;" >
							<img src="images/icon4.png" class="cir-icon"
							style="align-items: center;">
						</div>
						<h4 style="	position: relative;left: -45px;">Javascript <br><span style="font-weight: 200;">Basic to Advanced</span> </h4>

						<p style="	position: relative;margin-left: 57px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" style="float: right;">Get started</a>
				 </div>
				</div>


			</div>
</div>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
</main>
';

include('footer.html');

?>
