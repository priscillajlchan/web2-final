
<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<title>"Priscilla's Final"</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</head>


<body>

	<div id="container">
		<header>
			<h1>Frozen Yogurt!</h1>
		</header>

		<div id="tab">
			<ul class="tabs">
				<li><a href="#about" class="nav">About</a></li>
				<li><a href="#contact" class="nav">Contact</a></li>
				<li><a href="#poll" class="nav">Poll</a></li>
				<li><a href="#results" class="nav">Results</a></li>
			</ul>

		</div>


		<div id="content">

			<section id="about">
			<h2>Frozen Yogurt <br> or Ice Cream?</h2>

				<p>A perfect treat for a hot summer day?</p>
				<p>Over the past year, frozen yogurt has gotten insanely popular. More and more frozen yogurt shops are opening up. In such a healthy concious city like Vancouver, what's the reason behind why one would choose frozen yogurt over ice cream?</p> 

				<p>What's your favorite go-to place? How much are you willing to spend? 
				What's your favorite flavor?</p>

				<p>We would appreciate your feedback!</p>
				
				<p>Thanks for participating!</p>

			</section>

		<section id="contact">
			

			<a class="google_plus_32" href="https://plus.google.com/‎">Google+</a>
			<a class="facebook_32" href="www.facebook.com">Facebook</a>
			<a class="twitter_32" href="www.twitter.com">Twitter</a>

			<h2>Contact Us</h2>

			<p>This is where you can contact us. Don't hesitate to shoot us an email or phone us at 1-800-033-1010. We'll try our best to get back to you within 24 hours on our office hours.</p>

			<form action="mail.php" method="POST">

					<p><label for="name">Name</label> <input class="info" type="text"></p>

					<p><label for="email">Email</label> <input class="info" type="text"></p>

					<p>Message</p><textarea name="message" rows="6" cols="25"></textarea>

					<p><input type="submit" value="Send"><input type="reset" value="Clear"></p>
					
			</form>
		</section>

		<section id="poll">
				<h2>SURVEY TIME!</h2>
				<p>Here it is! Your chance to vote your opinons! It's okay to be honest here. No one will be around to jugdge you. </p>

				<h3>What's your favorite frozen yogurt place?</h3>

				<form id="form1" action="poll.php" method="post">
				
					<input type="radio" name="dessert" value="menchies">
					<label for="place">Menchies</label>
					<br>
					<input type="radio" name="dessert" value="qoola">
					<label for="place">Qoola</label>
					<br>
					<input type="radio" name="dessert" value="bella gelateria">
					<label for="place">Bella Gelateria</label>
					<br>
					<input type="radio" name="dessert" value="yeti">
					<label for="place">Yeti</label>
					<br>
					<input type="radio" name="dessert" value="other">
					<label for="place">Other</label>
					<br>
					<br>
					<input id="button" class="send" type="submit" name="" value="Vote!">
				</form>

			</section>

			<section id="results">

				<h2>Survey Results</h2>
				<p>Here it is! See what's the most popular place amongst the public!</p>

			</section>













		<footer>
			<p>Copyright PRISCILLA CHAN 2013</p>
		</footer>

	</div>
</body>
</html>