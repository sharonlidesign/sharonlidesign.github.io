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
			<h2>Cornell Thrift Brand</h2>
		</div>

		<main>
      <h4><strong>Role:</strong> Brand Designer</h4>
      <h4><strong>Tools:</strong> Adobe Photoshop</h4>
      <h4><strong>Duration:</strong> January to May 2019</h4>
      <p>I designed this branding guide to reflect the club’s new mission: to promote thrifting as a
        desirable alternative for exploring unconventional fashion trends and personal style, on top of its
        original mission of sustainability. I combined the vintage aesthetic that is associated with thrift
        stores with the currently trendy minimalist aesthetic to create a brand that is more
        attractive to college students. </p>
      <figure>
		<img src="images/brandingpage/ThriftBrandingGuide.png" class="captioned" alt="Cornell Thrift Branding Guide"/>
		<!-- Image owned by me -->
        <figcaption>Cornell Thrift Branding Guide</figcaption>
      </figure>
      <figure>
		<img src="images/brandingpage/signs-photo.JPG" class="captioned" alt="Photo of Signs"/>
		<!-- Image owned by me -->
        <figcaption>Signs that I designed for one of our clothing donation stations</figcaption>
      </figure>
		</main>
		<div class="buttonHolder">
			<div class="backButton">
				<a href="index.php">&larr; Back to Home</a>
			</div>
			<div class="topButton">
				<a href="cornellcreatives.php">Next Project &rarr;</a>
			</div>
		</div>
		</div>
		<?php include("includes/footer.php"); ?>
</body>
</html>
