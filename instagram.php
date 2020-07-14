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
                <h2>Instagram Case Study: Improving How Users Showcase Their Brand</h2>
				<img class="projectHeaderImage" src="images/icons/insta-header.png" alt="Instagram Header Image"/>
				<!-- Image owned by me -->
		</div>

		<main>
			<h4><strong>Role:</strong> Product Designer</h4>
			<h4><strong>Tools:</strong> Sketch, Illustrator</h4>
			<h4><strong>Duration:</strong> February to May 2019</h4>
			<p><em>I did this case study as a project for Intro to Digital Product Design. I am in no way affiliated with Instagram.</em></p>
			<p>People are increasingly using Instagram as a <strong>platform for marketing and self-promotion</strong>. After all, its simple, uniform design excels at emphasizing visual content and individuality. With Instagram, anybody has the means to reach a large audience and create a brand for themselves (Heard of Instagram influencers?) . With this in mind, I set out to <strong>improve how users can better showcase themselves to the world</strong>.</p>
			<h2>Discover</h2>
			<h3>Initial Observation</h3>
			<p>Overall, Instagram is strong in its <strong>minimalism and efficient delivery</strong> of content, but<strong> limited in personal customization</strong>.</p>
			<h3>User Research</h3>
			<p>I interviewed a group of Instagram users including: bloggers, artists, and casual users. My goal was to discover ways to <strong>improve how they can express themselves on their Instagram</strong>. <strong>Questions I asked included:</strong></p>
			<ul>
				<li>What is your goal for using Instagram?</li>
				<li>How do you feel about the way your profile currently looks?</li>
				<li>What do you think of your current Instagram presence?</li>
			</ul>
			<h3>User Insights</h3>
			<ol>
				<li>Users want to show <strong>different aspects</strong> of their life or brand. <q>I try to add diversity to my profile in terms of the photos I post.</q>
				</li>
				<li>Users depend on their profiles to <strong>attract more followers and stand out</strong>. <q>I want people to think my profile looks nice so that I get more followers.</q>
				</li>
				<li>Users want their profiles to have a <strong>certain aesthetic</strong> in their profiles, but find it <strong>difficult to maintain</strong>.
					<q>I’m trying to do color coordination in my feed because I want it to look cohesive and professional, but it takes a lot of time and energy.</q>
				</li>
			</ol>
			<h2>Define</h2>
			<h3>User Archetype</h3>
			<img src="images/ig_page/persona-graphic.png" alt="User Persona"/>
			<!-- Image owned by me -->
			<h3>Deeper People Problem</h3>
			<p>Influencers/Businesses want to create an <strong>ideal persona</strong> in order to gain attention and trust, but they have <strong>limited tools</strong> to do so.</p>
			<h2>Develop</h2>
			<h3>Brainstorming</h3>
			<div class="picRow">
				<figure>
					<img src="images/ig_page/how-might-we.jpg" class="captioned" alt="How Might We's"/>
					<!-- Image owned by me -->
					<figcaption>How Might We's</figcaption>
				</figure>
				<figure>
					<img src="images/ig_page/opp-areas.jpg" class="captioned" alt="Opportunity Areas"/>
					<!-- Image owned by me -->
					<figcaption>Opportunity Areas</figcaption>
				</figure>
				<figure>
					<img src="images/ig_page/solution-spaces.jpg" class="captioned" alt="Solution Spaces"/>
					<!-- Image owned by me -->
					<figcaption>Solution Spaces</figcaption>
				</figure>
			</div>
			<p>After brainstorming with friends, I decided on the following solution space: <strong>helping the user present their unique brand through their profile page.</strong></p>
			<p>I chose this solution space because:
				<ul>
					<li>It's the most consistent with the People Problem (your profile is the face of your online persona)</li>
					<li>It had the most potential features to implement</li>
					<li>It seemed the most feasible</li>
				</ul>
			<h3>Picking a Feature</h3>
			<p>I sketched out my initial ideas for features and analyzed the feasibility and impact of each one.
				I decided to pursue a feature <strong>Collections.</strong>
				The initial concept of this feature was that it would:</p>
				<ol>
					<li>Allow the user to group their posts into categories</li>
					<li>Let the user display the main themes of their profile to their audience</li>
				</ol>
			<img src="images/ig_page/feasibility-chart.jpg" alt="Feasibility and Impact Chart"/>
			<!-- Image owned by me -->
			<h2>Deliver</h2>
			<h3>Beginning Eplorations</h3>
				<figure>
					<img src="images/ig_page/collection-sketches.JPG" class="captioned" alt="Sketches"/>
					<!-- Image owned by me -->
					<figcaption>Sketches</figcaption>
				</figure>
				<figure>
					<img src="images/ig_page/initial-collection-explorations.png" class="captioned" alt="Initial Explorations"/>
					<!-- Image owned by me -->
					<figcaption>Initial Collection Mid-Fidelity Prototypes</figcaption>
				</figure>
			<h3>User Feedback</h3>
			<p>I initially presented the categories as small text-buttons. However,
				during <strong>usability-testing</strong>, users were confused about the
				 <strong>function of the buttons</strong>. I deduced that this was
				 because the buttons were placed at the <strong>wrong level of the information hierarchy</strong>.</p>
			<h3>Market Analysis</h3>
			<p>From <strong>market research</strong>, I observed that many current apps represent categories with <strong>visual imagery</strong> in order to clearly represent the content and purpose of a collection/album.</p>
			<figure>
				<img src="images/ig_page/market-analysis.png" class="captioned" alt="Market Analysis"/>
				<figcaption>Market Analysis</figcaption>
			</figure>
			<p>With these considerations in mind, I came up with another iteration with the following improvements:
				<ul>
					<li>Made Collections <strong>more in-line with the existing information hierarchy</strong>– the placement of the Collections tab in the same line as the grid and
					column tabs indicates that it is also another viewing layout</li>
					<li><strong>Increased the prominence</strong> of Collections by placing them in their own page</li>
					<li>Added a <strong>visual preview of each Collection</strong></li>
					<li>Designed the layout to show a <strong>broad visual overview</strong> of a brand/person.</li>
				</ul>
			<figure>
				<img src="images/ig_page/visual-buttons.png" class="captioned" alt="Mid-Fidelity of Chosen Iteration"/>
				<!-- Image owned by me -->
				<figcaption>Chosen Iteration</figcaption>
			</figure>
			<h3>Visual Explorations of Collection Button</h3>
			<figure>
				<img src="images/ig_page/buttons-visual.png" class="captioned" alt="Different Button Explorations"/>
				<!-- Image owned by me -->
				<figcaption>Different Button Explorations</figcaption>
			</figure>
			<p>I ultimately chose <strong>A</strong> because the text doesn’t interfere with the image. Furthermore, the dark overlay gives the Collection buttons an <strong>unique identity</strong> a part from other buttons on Instagram.</p>
			<h3>Final Collections View</h3>
			<figure>
				<img src="images/ig_page/collections-on-profile.png" class="captioned" alt="High-Fid Mock-up of Collections View"/>
				<!-- Image owned by me -->
				<figcaption>High-Fid Mock-up of Collections View</figcaption>
			</figure>
			<h3>Explorations of Individual Collection Page</h3>
			<div class="picRow">
				<figure>
					<img src="images/ig_page/Collection-page-exp.png" alt="Collection Page Explorations" class="captioned"/>
					<!-- Image owned by me -->
					<figcaption>Explorations of Individual Collection Pages</figcaption>
				</figure>
			</div>
			<p>After user feedback, I decided to go with <strong>B</strong> because it shows a clear hierarchy. It highlights the category name while still indicating the profile that it is a part of.</p>
			<h3>Prototype of Follower/Viewer's Side</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8prXdnqnw0M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h3>Personlizing Collections: Exploring Iterations of the Editing Flow</h3>
			<p>What does the influencer’s side of the interaction look like? How might
				they personalize their Collections?</p>
			<img src="images/ig_page/editing-flow-explorations.png" alt="Editing Flow Explorations"/>
			<!-- Image owned by me -->
			<p>After exploring different iterations of the editing flow, I decided to
				go with the <strong>Entry Point: Profile Page</strong> flow for the following reasons:</p>
			<ul>
				<li>The entry point is not immediately visible, but <strong>easy to access</strong> (hidden until needed)</li>
				<li>The incorporation into the <strong>information hierarchy</strong> makes sense because Collections should be seen in respect to the <strong>profile as a whole</strong></li>
				<li>The user can get an overview of all her Collections and make <strong>high-level</strong> edits, such as creating/deleting a whole Collection</li>
				<li>The user is able to personalize their Collections while considering <strong>all posts in the Collection</strong> at once</li>
			</ul>
			<h3>Prototype of Influencer's Side</h3>
			<p>I designed the final editing flow with inspiration from Apple Photos,
				while still following Instagram’s existing style guidelines. I think
				this flow is more enjoyable and easy-to-use compared to Instagram’s
				current editing collections flow because it is more compact— all editing
				actions (add, remove, change name/cover) can be seen on one page.
			</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/LtXrEhymdf4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h2>Conclusion</h2>
			<p>My final design of Collections allows the influencer to easily showcase their online persona and brand.
			When I user-tested for the last time, my
			users commented that the feature was incorporated quite discretely.
			Many also said that they would love to use the feature to express
			the main topics of their profile.</p>
			<h3>What I Gained from this Experience</h3>
			<ul>
			  <li>Practiced foundational UX design techniques (how to conduct user interviews, wireframing, usability-testing, etc.)</li>
			  <li>Learned how to make design decisions from a balanced marketing-and-user perspective</li>
			</ul>
			<p>Thanks for reading!</p>
		</main>
		<div class="buttonHolder">
			<div class="backButton">
				<a href="index.php">&larr; Back to Home</a>
			</div>
			<div class="topButton">
				<a href="cornellthrift.php">Next Project &rarr;</a>
			</div>
		</div>
		</div>
		<?php include("includes/footer.php"); ?>
</body>
</html>
