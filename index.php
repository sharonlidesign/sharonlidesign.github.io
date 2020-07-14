<?php
include("includes/init.php");
$title = "Sharon's Portfolio";
?>

<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body id="homepage">

	<?php include("includes/header.php"); ?>

	<div id="content">
	<main>
		<div class="split home-header">
			<div class="split1">
				<h1>Hi, I'm Sharon Li</h1>
				<p> Welcome to my portfolio. I’m a UX and visual designer,
		currently studying Information Science at Cornell University with a concentration in UX Design. I am passionate about
		designing inclusive and enjoyable experiences that facilitate human connection as well as physical and mental comfort. Currently designing for Cornell Creatives and UniPantry.</p>
			</div>
			<div class="split2">
					<img src="images/icons/sharonportrait.png" alt="Cartoon Portrait" />
					<!-- Image owned by me -->
			</div>
		</div>
		<div id="myProjects">
			<div class="split">
				<div class="split1">
					<a href="https://www.unipantry.net/"><img src="images/icons/unipantry-icon.png" class="projectButton" alt="UniPantry Button"/></a>
					<!-- Image owned by me -->
				</div>
				<div class="split2">
					<p class="type-of-project">FREELANCE / PRODUCT DESIGNER</p>
					<h2>UniPantry</h2>
					<p>Start-up company that helps college students simplify their meal prep process through meal curation and grocery delivery.</p>
					<p><a href="mailto: sl2495@cornell.edu">Contact Me for Details</a></p>
				</div>
			</div>
			<div class="split">
				<div class="split1">
					<a href="cornellcreatives.php"><img src="images/icons/cornellcreatives-icon.png" class="projectButton" alt="Cornell Creatives Button"/></a>
					<!-- Image owned by me -->
				</div>
				<div class="split2">
					<p class="type-of-project">SCHOOL CLUB / WEB & GRAPHIC DESIGNER</p>
					<h2>Cornell Creatives</h2>
					<p>A platform and community that connects creatives at Cornell.</p>
					<p><a href="cornellcreatives.php">Read More</a></p>
				</div>
			</div>
			<div class="split">
				<div class="split1">
					<a href="eventsapp.php">
						<img src="images/icons/eventsapp-bubble.png" class="projectButton" alt="Events App Button"/>
						<!-- Image owned by me -->
					</a>
				</div>
				<div class="split2">
					<p class="type-of-project">HACK CHALLENGE / UX DESIGNER</p>
					<h2>School Events App</h2>
					<p>An app that helps students find and schedule events on the Cornell campus.</p>
					<p><a href="eventsapp.php">Read More</a></p>
				</div>
			</div>
			<div class="split">
				<div class="split1">
					<a href="instagram.php"><img src="images/icons/insta-bubble.png" class="projectButton" alt="Instagram Button"/></a>
					<!-- Image owned by me -->
				</div>
				<div class="split2">
					<p class="type-of-project">CLASS PROJECT / PRODUCT DESIGNER</p>
					<h2>Instagram Case Study</h2>
					<p>Case study detailing a feature that helps users better express themselves and their brand on Instagram.</p>
					<p><a href="instagram.html">Read More</a></p>
				</div>
			</div>
			<div class="split">
				<div class="split1">
					<a href="cornellthrift.php"><img src="images/icons/cornellthrift-bubble.png" class="projectButton" alt="Cornell Thrift"/></a>
					<!-- Image owned by me -->
				</div>
				<div class="split2">
					<p class="type-of-project">SCHOOL CLUB / BRAND & GRAPHIC DESIGNER</p>
					<h2>Cornell Thrift Brand</h2>
					<p>Redesigned branding for a fashion and sustainability organization.</p>
					<p><a href="cornellthrift.php">Read More</a></p>
				</div>
			</div>
		</div>
	</main>
	<?php include("includes/footer.php"); ?>
	</div>
</body>

</html>
