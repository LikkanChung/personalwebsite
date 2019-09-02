<!-- ©Lik Kan Chung likkanchung.com 2017 All rights reserved. -->
<!doctype html>
<html>
	<head>
		<?php require_once('php/head.php'); ?>
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
					My name is Lik Kan, also spelt "Likkan" casually. I am <?=intval(date('Y', time() - strtotime('1999-03-21'))) - 1970;?> years old and currently a third year student.<br>
					<br>
					I am a committee member of Computer Science Society at the University of Birmingham for the year 2019-20. My main responsibilites are the publicity and promotion of events. You can check out our website <a href="https://cssbham.com">here</a>. I am also an organiser of HackTheMidlands - an inclusive hackathon for all age 14+ hosted in the West Midlands - you can also see the website <a href="https://hackthemidlands.com">here</a>. Finailly I am a Student Ambasador for the deparement at the univserity, so you may have seen me around during events in the school.
				</p>
			</div>		

			<div class="container stats">
				<h1 class="subtitle">Stats</h1>
				<p>
					Here's some statistics about me:
				</p>
				<div class="collapse" id="statshidden">
					<?php require_once('php/stats.php'); ?>
					
				</div>
					<button type="button" class="btn btn-outline-secondary" data-toggle="collapse" data-target="#statshidden">Show/Hide Stats</button>
			</div>

			<div class="container">
				<div class="projects">
					<h1 class="subtitle">Projects</h1>
					<p>
						Below are links to professional projects I have previosuly worked on. If you have any enquiries, you can contact me via. email. 
					</p>

					<div class="card projectcard">
						<a href="http://cssbham.com" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/cssbham.com/logo.png" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">cssbham.com</h1>
								<p>
									<?php include('languages/html-css.php'); ?>
									<?php include('languages/js.php'); ?>
									<?php include('languages/git.php'); ?>
								</p>
								<p class="card-text">As part of the committee, we've worked in a team to revamp this website.</p>
								<p class="card-text">My main focuses on this projects have been the visual design of the site, including styling the posts and adding usability features on the events calendar.</p>
							</div>
							<div class="card-footer">
								<span class="text-muted">Last Updated: Sept 2019</span>
								<span class="project-footer-link">
									<a href="http://github.com/cssuob/cssuob.github.io">
									<img src="resources/github.png" alt="GitHub" class="project-footer-link">
									</a>
								</span>
							</div>
						</a>
					</div>

					<div class="card projectcard">
						<a href="https://github.com/brettsaunders21/Scrimmage" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/Scrimmage/cropped-scrimmagelogo.png" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">"Scrimmage"</h1>
								<p>
									<?php include('languages/java.php'); ?>
									<?php include('languages/git.php'); ?>
								</p>
								<p class="card-text">As part of a group project we created this game.</p>
								<p class="card-text">With five core features implementing Competitive play, Networking, Aritifical Intelligence, Audio and User Interface, this game is a fun miltiplayer free-for-all deathmatch.</p>
							</div>
							<div class="card-footer">
								<span class="text-muted">Jan - May 2019</span>
								<span class="project-footer-link">
									<a href="https://github.com/brettsaunders21/Scrimmage">
									<img src="resources/github.png" alt="GitHub" class="project-footer-link">
									</a>
								</span>
							</div>
						</a>
					</div>

					<div class="card projectcard">
						<a href="http://likkanchung.com" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/likkanchung.com/image.jpeg" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">likkanchung.com</h1>
								<p>
									<?php include('languages/html-css.php'); ?>
									<?php include('languages/php.php'); ?>
									<span class="language border border-info rounded">&nbsp;Bootstrap&nbsp;</span>
									<?php include('languages/git.php'); ?>
								</p>
								<p class="card-text">This is the website you're on now! I created this as my personal portfolio to show my work.</p>
								<p class="card-text">I've also used Bootstrap to help with styling this project.</p>
							</div>
							<div class="card-footer">
								<span class="text-muted">Last Updated: Sept 2019</span>
								<span class="project-footer-link">
									<a href="http://github.com/likkanchung/personalwebsite">
									<img src="resources/github.png" alt="GitHub" class="project-footer-link">
									</a>
								</span>
							</div>
						</a>
					</div>

					<div class="card projectcard">
						<a href="http://happygatheringcardiff.co.uk" class="projectlink">
							<img class="card-img-top projectimg" src="resources/projects/happygatheringcardiff.co.uk/logo.jpg" alt="">
							<div class="card-body">
								<h1 class="card-title subtitle">happygatheringcardiff.co.uk</h1>
								<p>
									<?php include('languages/html-css.php'); ?>
									<?php include('languages/php.php'); ?>
									<?php include('languages/git.php'); ?>
								</p>
								<p class="card-text">Currently ongoing project</p>
								<p class="card-text">The restaurant website is currently being updated and redesigned.</p>
							</div>
							<div class="card-footer text-muted">Jan 2018 - current</div>
						</a>
					</div>
				</div>
			
			<div class="container interests">
				<h1 class="subtitle">Interests</h1>
				<p>
					<strong>Computer Science Society (CSS)</strong> <em>2019-20</em>
					<ul>
						<li>Publicty Repesentative to the committee</li>
						<li>Advertise and promote CSS events to members of the society</li>
						<li>Using social media channels such as Facebook, Twitter and Instagram to publicise events</li>
					</ul>
				</p>

				<p>
					<strong>HackTheMidlands</strong> <em>2019</em>
					<ul>
						<li>Organiser of HTM 4.0 - inclusive hackathon in the West Midlands</li>
						<li>Using social media to engage with the community and promote the event</li>
						<li>Orgnising the event logisitically, inclding working with sponsors and supporters</li>
					</ul>
				</p>
			</div>


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