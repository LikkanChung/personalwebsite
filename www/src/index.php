<!-- ©Lik Kan Chung likkanchung.com 2017 All rights reserved. -->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta property="og:url" content="http://likkanchung.com">
		<meta property="og:title" content="Lik Kan Chung">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Computer Science student at University of Birmingham. Take a look at my portfolio at likkanchung.com">
		<meta property="og:image" content="http://likkanchung.com/resources/projects/likkanchung.com/image.jpeg">

		<title>Lik Kan Chung</title>
		<link rel="icon" href="favicon.ico">
		
		<!-- Using Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css?<?=filemtime('main.css');?>">

	</head>

	<body>
		<div class="cover">
			<div class="covercontent">
				<img class="coverimg" src="resources/profile.jpg" alt="">
				<h1 class="title">Lik Kan Chung</h1>
				<h1 class="subtitle">Student</h1>
				<p>Computer Science<br>University of Birmingham</p>
			</div>
			<div class="downarrow">
				<h1 class="title"><a href="#about" id="downarrowlink">&#x21e9;</a></h1>
			</div>
		</div>

		<div class="content">
			<div class="container about" id="about">
				<h1 class="subtitle">About</h1>
				<p>
					My name is Lik Kan, also spelt "Likkan" casually. I am <?=intval(date('Y', time() - strtotime('1999-03-21'))) - 1970;?> years old and currently studying Computer Science.<br>
					<br>
					Long story short: I've been a computer enthusiast for a long time and I have always wanted to make my own programs and build my own systems. I study well with A*s in maths and science at GCSE and grades AAB at A Level. I was in the school's Head Team so I know how to work in a team and I work well individually too - I managed all of the team's email and Twitter side. Now I'm studying Computer Science at the University of Birmingham.       
				</p>
			</div>		

			<div class="container stats">
				<h1 class="subtitle">Stats</h1>
				<p>
					Here's some statistics about me:
				</p>
				<div class="collapse" id="statshidden">
					<p>
						Seconaday Education Exam Grades:
					</p>	
						A Level (2017):
						<ul> 
							<li>A - Computer Science</li>
							<li>A - Physics</li>
							<li>B - Mathematics</li>
						</ul>
						AS (2016):
						<ul> 
							<li>C - German</li>					
						</ul>
						GCSE (2014-15):
						<ul> 
							<li>5A* - Computer Science, Maths, Biology, Chemistry, Physics</li>
							<li>4A - English Literature and Language, Geography, Design Technology</li>
							<li>2B - French, German</li>
							<li>2B Short Course - Religious Studies, Welsh Second Language</li>
							<li>Merit in Level 2 Additional Mathematics</li>
							<li>Merit in BTEC Level 2 Engineering</li>
						</ul>
					
					<p>
						Other miscellaneous qualifications:
						<ul>
							<li>Full UK Driving Licence with Pass Plus </li>
						</ul>
					</p>
					
				</div>
					<button type="button" class="btn btn-outline-secondary" data-toggle="collapse" data-target="#statshidden">Show/Hide Stats</button>
				
			</div>
			

			<div class="container">
				<div class="projects">
					<h1 class="subtitle">Projects</h1>
					<p>
						Below are links to professional projects I have previosuly worked on. If you have any business enquiries, you can contact me via. email. 
					</p>
					<p>
						My languages: 
						<span class="language border border-success rounded">&nbsp;Visual Basic&nbsp;</span>
						<span class="language border border-warning rounded ">&nbsp;Java&nbsp;</span>
						<span class="language border border-warning rounded">&nbsp;HTML &amp; CSS&nbsp;</span> 
						<span class="language border border-danger rounded ">&nbsp;PHP&nbsp;</span>
						<span class="language border border-danger rounded ">&nbsp;OCaml&nbsp;</span>
						<br>
					</p>	

					<div class="card projectcard">
						<a href="http://likkanchung.com" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/likkanchung.com/image.jpeg" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">likkanchung.com</h1>
								<p>
									<span class="language border border-warning rounded">&nbsp;HTML &amp; CSS&nbsp;</span>
									<span class="language border border-danger rounded">&nbsp;PHP&nbsp;</span>
									<span class="language border border-info rounded">&nbsp;Bootstrap&nbsp;</span>
								</p>
								<p class="card-text">This is the website you're on now! I created this as my personal portfolio to show my work.</p>
								<p class="card-text">I've also used Bootstrap to help with styling this project.</p>
							</div>
							<div class="card-footer text-muted">Last Updated: Dec 2017</div>
						</a>
					</div>

					<div class="card projectcard">
						<a href="http://happygatheringcardiff.co.uk" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/happygatheringcardiff.co.uk/logo.jpg" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">happygatheringcardiff.co.uk</h1>
								<p>
									<span class="language border border-warning rounded">&nbsp;HTML &amp; CSS&nbsp;</span>
									<span class="language border border-danger rounded">&nbsp;PHP&nbsp;</span>
								</p>
								<p class="card-text">Currently ongoing project</p>
								<p class="card-text">The restaurant website is currently being updated and redesigned.</p>
							</div>
							<div class="card-footer text-muted">Jan 2018 - current</div>
						</a>
					</div>
				</div>
					
				<br>	
				<div class="portfolio">
					<h1 class="subtitle">Portfolio</h1>
					<p>
						These are side or personal projects that I have worked on. Some of them are adapted from university assignments.
					</p>

					<div class="card projectcard">
						<a href="" class="projectlink">
							<img class="card-img-top projectimg" src="" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">Server-Client Messaging</h1>
								<p>
									<span class="language border border-warning rounded">&nbsp;Java&nbsp;</span>
								</p>
								<p class="card-text">
									<b>This project will be soon have an online demo. </b><br>
									Univerity Assignment. The task was to implement a system to send and receive messages between a server and multiple clients.
								</p>
							</div>
							<div class="card-footer text-muted">Completed: Feb 2018</div>
						</a>
					</div>
				</div>
				

					<!--<div class="card projectcard">
						<a href="http://kieranmason.co.uk" class="projectlink">
							<img class="card-img-top projectimg" src="resources/km.jpg" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">memes</h1>
								<p>
									<span class="language border border-info rounded">&nbsp;Photoshop&nbsp;</span>
								</p>
								<p class="card-text">Look at this wonderful specimen of a human.</p>
							</div>
							<div class="card-footer text-muted">Completed: Dec 2017</div>
						</a>
					</div>-->
			

			</div>

			
			<div class="container contact">
				<div class="contactlogo">
					<a href="http://twitter.com/LikkanChung"><img class="contactimg" src="resources/twitter.png" alt="Twitter/@LikkanChung"></a>
					<a href="http://linkedin.com/in/LikkanChung"><img class="contactimg" src="resources/linkedin.png" alt="Linkedin.com/in/LikkanChung"></a>
					<a href="http://github.com/LikkanChung"><img class="contactimg" src="resources/github.png" alt="Github.com/LikkanChung"></a>
					<a href="mailto:contact@likkanchung.com"><p>&#9993; contact@likkanchung.com</p></a>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	</body>

	<footer>
		<div class="container"><p>&copy;Lik Kan Chung likkanchung.com <?php echo date("Y"); ?> All rights reserved.</p></div>
	</footer>
</html>