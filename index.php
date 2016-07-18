<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>SimpleGreen</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="container">
			<div id="container2"> 

				<!-- ### Header Start ### -->

				<div id="header">
					<img src="images/onion.jpg" alt="Me" align="middle" width="571" height="140"/>
					<h1><a href="/">SimpleGreen</a></h1>
					<p>Just another free CSS template</p>
				</div>

				<!-- ### Header End ### -->

				<!-- ### Top Menu Start Start ### -->

				<div id="topmenu">
					<p>Just another free CSS template</p>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">More Stuff</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

				<!-- ### Top Menu End ### -->

				<div id="contentcontainer">

					<!-- ### Content Start ### -->

					<div id="content">

						<h2>Persona:</h2>
						
						<p>A typical person who reads the onion is somebody who reads it regularly and maybe even religiously.  This person follows currents events and is a cautiously optimistic in general.  Current events can be source of depresion for many but this person uses this site, as therapy, to see the lighter side of humanity.  The political leanings of this person are not strongly defined but it would be safe to safe to say this person tends to lean towards the left.</p>

						<p>This person works in a highly technical environment and reads this during work time as a break in the montanous routine.  This person reads this on a mobile device in order to avoid detection from the IT department.</p>

						<h2>Use Case:</h2>
						<ul>
							<li>Why - Looking for comic relief to relieve stress</li>
							<li>Who - Cautiously Optimic person who follows current events</li>
							<li>What - Using a mobile phone</li>
							<li>When - Usually during work hours</li>
							<li>Where - At work</li>
						</ul>
						
						<h2>Interaction Flow:</h2>
						<ul>
							<li>A user will navigate to the index page and will browse and choose a paticular article of interests.</li>
							<li>A user will navigate directly to the article that a friend shared either on email or social media.</li>

						</ul>

						<h2>Conceptual Model:</h2>
						<h3>Three Entities</h3>
						<ul>
							<li>Article</li>
							<li>Tag</li>
							<li>Media</li>
						</ul>

						<h3>Relationships</h3>
						<h4>Article - Tag</h4>
						<p>One tag can have many articles.  One article can have many tags.  Therefore this is many to many relationship</p>
						<h4>Article - Media</h4>
						<p>One Article can have several Media (in this case 1) and one Media entity can have many articles.  Therefore this is many to many relationship.</p>

						
						<form action="#" method="post" id="commentform">
							<p><input type="text" id="author" name="author" value="" size="25" />
								<label for="author">Name</label></p>
							<p><input type="text" id="email" name="email" value="" size="25" />
								<label for="email">E-Mail</label></p>
							<p><textarea name="comment" id="comment" cols="40" rows="3" tabindex="4"></textarea></p>
							<p><input type="submit" class="formbutton" value="Submit" />
								<input type="reset" class="formbutton" value="Reset" /></p>
						</form>

					</div>




				<div id="footer">

					<p>
						Copyright &copy; 2011 <a href="http://yoursite.com">YourSite</a>.

						<!-- ### Please leave this small link back to my site. Thank You! ### -->
						Design by <a href="http://omwebbhotell.net">Webbhotell</a>.

						Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
					</p>
				</div>

			</div>
		</div>
	</body>
</html>
