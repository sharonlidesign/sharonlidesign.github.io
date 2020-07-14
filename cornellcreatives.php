<?php
include("includes/init.php");
$title = "Sharon's Portfolio";
?>
<!doctype html>
<html>

<?php include("includes/head.php"); ?>

<body>

	<?php include("includes/header.php"); ?>

	<div id="writing">
		<div class="projectHeader">
				<h1>Cornell Creatives</h1>
				<img class="projectHeaderImage" src="images/icons/cornellcreatives-header.png" alt="Cornell Creatives Header Image"/>
				<!-- Image owned by me -->
		</div>

		<main>
      <h4><strong>Role:</strong> Web & Graphic Designer</h4>
      <h4><strong>Tools:</strong> Figma</h4>
      <h4><strong>Duration:</strong> October 2019 to Present</h4>
      <p>Cornell Creatives is an organization that helps creative people, whether an artist, musician, designer, etc. find opportunities to refine their craft and promote their work.</p>
			<h2>What We Do</h2>
			<ol>
				<li>Give creatives a <strong>platform</strong> to promote and showcase their work through our website, social media, and showcase events.</li>
				<li>Act as an <strong>agency</strong> that helps connect creatives to creative work opportunities at Cornell and beyond.</li>
				<li>Bring together a <strong>community</strong> of creatives who can collaborate with each other and share ideas.</li>
			</ol>
			<h2>Web Design</h2>
			<p>I designed the About page to reflect our three core missions and show our leadership team. Currently, I'm designing the other pages of the website as well as collaborating with the front-end team to optimize the interactivity and improve the experience of the website.</p>
			<figure>
				<a href="http://cornellcreatives.com/about.html"><img src="images/cornellcreatives/about-page.png" class="projectButton" alt="Cornell Creatives Graphic"/></a>
			</figure>
			<h2>Graphic Design</h2>
			<p>I designed our marketing graphics and worked with our brand team to design our logo and branding guide.</p>
			<div class="picRow">
				<figure>
					<img src="images/cornellcreatives/calling-creators.png" alt="Cornell Creatives Graphic"/>
				</figure>
				<figure>
					<img src="images/cornellcreatives/final-launch-poster.jpg" alt="Cornell Creatives Graphic"/>
				</figure>
				<figure>
					<img src="images/cornellcreatives/gbody-poster.png" alt="Cornell Creatives Graphic"/>
				</figure>
			</div>
		</main>
		<div class="buttonHolder">
			<div class="backButton">
				<a href="index.php">&larr; Back to Home</a>
			</div>
			<div class="topButton">
				<a href="eventsapp.php">Next Project &rarr;</a>
			</div>
		</div>
		</div>

		<?php include("includes/footer.php"); ?>
</body>
</html>
