

	<title>PHP Quiz</title>

	<!--link rel="stylesheet" type="text/css" href="css/style.css" /-->
	<style>

		h1{font-size:40px;
			font-family: "Lato", sans-serif;
		text-align: center;
		background-color:#48af4b;
		color:white;
		width:100%;margin:0px;
		padding:60px 0px;}

		h3
		{
			color:#48af4b;
			font-size:30px;
			font-family:"Lato", sans-serif;
			margin-top:10px;
		}

		li.quiz{background-color:#fff;
			box-shadow: 4px 4px 4px 4px #f4f4f4;
			padding:20px;
			margin:20px 0px;}

		li.quiz div
		{
			height:50px;
			line-height:50px;
			border-bottom:1px solid #f1f1f1;
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
			border:0px;
			font-size:18px;
			margin-left:47px;
			margin-top:20px;

		}

		@media only screen and (min-width:769px)
		{
			#page-wrap{margin:0px 100px;}
		}
	</style>
</head>

<?php include('nav.html'); ?>

<main>

	<div style="height:300px;background-image:url(images/abtbg.jpg);background-size:cover;line-height:340px;text-align:center;font-size:60px;color:white;font-family: 'Roboto',sans-serif">
	Learning Paths
	</div>

	<h1>Quiz on Front End Development</h1>

	<div id="page-wrap">



		<form action="grade.php" method="post" id="quiz">

            <ol>

                <li class="quiz">

                    <h3>CSS Stands for...</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A">A) Computer Styled Sections </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required/>
                        <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" required/>
                        <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" required/>
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>

                </li>

                <li  class="quiz">

                    <h3>Internet Explorer 6 was released in...</h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A">A) 2001</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" required/>
                        <label for="question-2-answers-B">B) 1998</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required/>
                        <label for="question-2-answers-C">C) 2006</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" required/>
                        <label for="question-2-answers-D">D) 2003</label>
                    </div>

                </li>

                <li class="quiz">

                    <h3>SEO Stand for...</h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A) Secret Enterprise Organizations</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" requiredrequired/>
                        <label for="question-3-answers-B">B) Special Endowment Opportunity</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" requiredrequired/>
                        <label for="question-3-answers-C">C) Search Engine Optimization</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" requiredrequired/>
                        <label for="question-3-answers-D">D) Seals End Olives</label>
                    </div>

                </li>

                <li class="quiz">

                    <h3>A 404 Error...</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" requiredrequired/>
                        <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page Not Found</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" requiredrequired/>
                        <label for="question-4-answers-B">B) is a good excuse for a clever design</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" requiredrequired/>
                        <label for="question-4-answers-C">C) should be monitored for in web analytics</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" requiredrequired/>
                        <label for="question-4-answers-D">D) All of the above</label>
                    </div>

                </li>

                <li class="quiz">

                    <h3>Your favorite website is</h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A">A) CSS-Tricks</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required/>
                        <label for="question-5-answers-B">B) CSS-Tricks</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" required/>
                        <label for="question-5-answers-C">C) CSS-Tricks</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" required/>
                        <label for="question-5-answers-D">D) CSS-Tricks</label>
                    </div>

                </li>

            </ol>

            <input type="submit" value="Submit Quiz" class="button" />

		</form>

	</div>
</main>

<?php include('footer.html'); ?>
