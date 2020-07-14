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
				<h1>School Events App</h1>
				<figure>
					<img class="projectHeaderImage" src="images/icons/eventsapp-header.png" alt="Instagram Header Image"/>
					<figcaption><a href="https://statlerhotel.cornell.edu/resourcefiles/mainimages/cornell-university-ithaca-ny-top.jpg">Background Image Source</a></figcaption>
					<!-- Background image from https://statlerhotel.cornell.edu/resourcefiles/mainimages/cornell-university-ithaca-ny-top.jpg -->
				</figure>
		</div>

		<main>
			<h4><strong>Role:</strong> UX Designer</h4>
			<h4><strong>Tools:</strong> Sketch</h4>
			<h4><strong>Duration:</strong> 2 Weeks (Hack Challenge)</h4>
      <h4><strong>Team:</strong> 1 frontend developer and 2 backend developers</h4>
      <h2>Problem</h2>
      <p>Cornell is a community filled with diverse events and organizations. There is truly something for everyone-- if you know where to look. Students want to attend fun and interesting events on campus, but it is difficult to find and keep track of them due to the decentralized nature of how clubs advertise events. Some are advertised through Facebook, some through flyers, etc. Sometimes, students don't find out about a club until recruitment has ended. Our goal was to solve the problem of students missing out on events due to lack of information. </p>
      <h2>Discover</h2>
			<h3>Getting to Know the User</h3>
      <p>The target audience was Cornell students on campus. In order to better understand our target user, I interviewed three people that fit the description.</p>
      <p>I asked the following questions with the goal of <strong>familiarizing myself with the user's journey</strong>.</p>
      <ol>
        <li>How do you usually find and decide on which events to go to on campus?</li>
        <li>What has your experience been with finding events/clubs?</li>
        <li>How do you usually keep track of events to go to?</li>
        <li>What is the biggest pain point related to attending an event?</li>
        <li>What platforms/products do you usually use to find events? What problems have you faced with using this product for event-related activities?</li>
      </ol>
			<h2>Define</h2>
			<h3>Summarizing the Journey</h3>
      <p>After the interviews, I <strong>summarized the current event-finding process</strong> of the typical Cornell student: checking out at Facebook or flyers, reading the time/location, and getting notified by Facebook or a calendar.</p>
			<p>I identified students' main <strong>painpoints</strong> at each of the steps.</p>
      <figure>
			  <img src="images/eventsapppage/synthesis.png" class="captioned" alt="Research Synthesis"/>
			  <!-- Image owned by me -->
        <figcaption>Icons from https://www.iconsdb.com</figcaption>
      </figure>
			<h2>Develop</h2>
      <h3>Focus</h3>
			<p>Based on the pain points, I decided on the solution areas that I wanted to focus on. I mainly wanted to address the problems of disorganized event discovery and scheduling.</p>
			<p><strong>Focus Areas</strong></p>
			<ol>
        <li>Personalize recommendations to users based on their interests</li>
        <li>Help users discover new events and interests</li>
        <li>Allow users to keep track of their events in one place</li>
      </ol>
      <h3>Information Hierarchy</h3>
			<p>I based the three main pages of the app on the three focus areas.</p>
			<p><strong>Personal Feed:</strong> Recommends users events based on popularity and interest because those are the top things that students look for when deciding whether to attend an event.</p>
			<p><strong>Search:</strong> Gives the user the opportunity to find events intentionally and browse different categories.</p>
			<p><strong>Saved Events:</strong> Lets users view their planned events in chronological order.</p>
	  <img src="images/eventsapppage/info-archi.png" alt="Information Architecture"/>
	  <!-- Image owned by me -->
			<h2>Deliver</h2>
      <h3>Prototype</h3>
	  <img src="images/eventsapppage/eventsapp-prototype.png" alt="Final Prototype"/>
	  <!-- Image owned by me -->
			<h3>Limitations and Future Considerations</h3>
      <p>Since this project was limited to a 2 week duration, I did not have the time to implement some of the features that I would have liked to. Ideally, users would be able to view the number of attendees for each event. I would have also like to expand the app to include pages for each club, which would feature links to upcoming events and related clubs. This would help users discover and keep up with clubs that they are interested in. </p>
      <p>Over all, I very much enjoyed working with an interdisciplinary team to create a much-needed solution for our community.</p>
    </main>
		<div class="buttonHolder">
			<div class="backButton">
				<a href="index.php">&larr; Back to Home</a>
			</div>
			<div class="topButton">
				<a href="instagram.php">Next Project &rarr;</a>
			</div>
		</div>
		</div>
		<?php include("includes/footer.php"); ?>
</body>
</html>
