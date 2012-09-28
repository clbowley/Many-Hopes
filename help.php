<?php $thisPage="help";
	include('header.php') ?>
   <div id="container" role="main" class="help container_12">
	<div id="breadcrumb" class="grid_12"><a href="/making/manyhopes"><img src="img/home.png"/></a><h1>Get Involved</h1><?php include("social.php") ?></div>
	<div class="clear"></div>
	<div id="content" class="help grid_12">
		<section id="intro" class="grid_10 prefix_1 suffix_1 alpha omega">
					<h3>Many Hopes is a global community. The part of our body in Kenya does the work on the frontlines if we raise the funds where we are. There are many ways for you to get involved:</h3>
		</section>
			<section id="give" class="grid_10 prefix_1 suffix_1 alpha omega">
				<h1>Give Money</h1>
				<p>100% of your donation goes directly to our projects. How do we do it? Our operating costs are covered by a small group of donors committed to providing the foundation for our work. (Are you <a href="mailto:#">interested</a> in becoming one of these?)</p>
				<a href="/donate.php" class="bigbutton">Donate Now</a>
			</section>
			<section id="raise" class="grid_10 prefix_1 suffix_1 alpha omega">
				<h1>Raise Money</h1>
				<div class="grid_1 icon alpha">
					<img src="img/icon-a.png"/>
				</div>
				<div class="grid_9 omega">
					<h3>Launch a personal campaign</h3>
					<p>More than 60% of funds raised for our work are from individuals or teams or churches launching personal campaigns and raising $500 – $5000 from family and friends. Launch your campaign <a href="http://manyhopes.donorpages.com/ManyHopesEvent/" target="_blank">here and we’ll help you hit your target.</a></p>
				</div>
				<div class="grid_1 icon alpha">
					<img src="img/icon-b.png"/>
				</div>
				<div class="grid_9 omega">
					<h3>Launch a school campaign</h3>
					<p>Raise money at your school: E-mail <a href="mailto:schools@manyhopes.org">schools@manyhopes.org</a> and we’ll send you our US or UK based schools pack full of ideas for your school or classroom. Be sure to tell us whether you want the elementary/primary school or high school pack.</p>
				</div>
			</section>
		<section id="chapter" class="grid_12 alpha omega">
			<h1 class="grid_10 prefix_1 suffix_1 alpha omega">Join a local chapter</h1>

			<p class="grid_10 prefix_1 suffix_1 alpha omega">Our volunteer chapters are the heartbeats of Many Hopes.  Chapters meet together every month and  throw parties, host events, raise sponsorships, conduct e-mail campaigns and do countless other things to make the work in Kenya happen. Join your local chapter with a monthly investment of $10, $18 or $25 and be the story where you are.</p>
			<img src="img/help-map.jpg"/>
			<div id="help-email">
			<form>
				<label>Join a chapter:</label>
				<select onchange="sendMail(value);">
				  <option value="" disabled="disabled" selected>Choose your city...</option>
				  <option value="sf@manyhopes.org">San Francisco</option>
				  <option value="dc@manyhopes.org">Washington, D.C.</option>
				  <option value="ny@manyhopes.org">New York City</option>
				  <option value="boston@manyhopes.org">Boston</option>
				  <option value="mourne@manyhopes.org">Mourne</option>
				  <option value="belfast@manyhopes.org">Belfast</option>
				  <option value="bristolandbath@manyhopes.org">Bristol</option>
				  <option value="london@manyhopes.org">London</option>				
				</select>
			
			</form>
			</div>
		</section>
		<!-- <section id="invite" class="grid_10 prefix_1 suffix_1 alpha omega">
			<h1>Invite us to Speak</h1>
			<p></p>
		</section> -->
	</div>
	<div class="clear"></div>
   </div> <!--! end of #container -->
<?php include("footer.php") ?>