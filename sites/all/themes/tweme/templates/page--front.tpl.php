<?php

/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */

?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,Source+Sans+Pro:400,700|PT+Serif:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<div id="container">
	<div class="container">
		<?php if ($page['featured']): ?>
		<!-- Featured -->
		<div id="featured" class="container-wrapper hidden-phone">
		  <div class="container">
			<?php print render($page['featured']) ?>
		  </div>
		</div>
		<?php endif ?>
		<?php if ($preface): ?>
			<?php require_once('header.php'); ?>
		<!-- Header -->
		<?php endif ?>
	</div>

		<!-- Main -->
		<div id="main">
			<div class="full-width-image-1">
				<div class='hero-wrapper'>
					<h1>The Integrated Learning Platform.</h1>
					<h2>A new kind of technology for a transformational kind of learning experience.</h2>
				</div>
				<div class='bottom-transparent-line'></div>
			</div>
			<div class='full-width-text'>
				<div class="container">
					<h2 class='section-heading'>Introducing <span class='brand-white'>OpenCourse</span></h2>
					<p class='section-para heading'>Inspiring Innovative Ways to Teach, Learn and Share</p>
					<p class='section-para-teach-and-learn'>
						<strong>OpenCourse</strong> offer a new model for delivering learning experiences that leaves behind the textbook-driven, paper-and-pencil learning methods of the past. This model embraces a student-centered approach incorporating highly social, interactive, and personalized opportunities to learn while providing teachers with the type of evaluation tools that drive better decisions and outcomes. We understand the importance of putting students first with a focus on achieving their unique learning objectives.
						<div class='share-means'>
							in today's increasingly collaborative world, where answers to information are mere seconds away, this approach is being reinvented by <strong>OpenCourse</strong>, for active learners. Ongoing improvements in personal technology and online communities have redefined what it means to be social. And	this will, in turn, redefine what it means to teach and learn.
						</div>
					</p>
				</div>
			</div>
		</div>
		<div class='footer-buttons footer-buttons-normal-view footer-button-get-demo' id="get-demo">
			<div class='field-company'></div>
			<div class='get-free-demo-image'></div>
			<span class='footer-button-title'>Get Free Demo!</span>
			<div class="footer-button-body-hidden">
				We are really happy that you are intersted for take a tour to see how OpenCourse would work.
				<div class='action-buttons'>
					<a class='button-wrap'>Try Demo</a>
				</div>
			</div>
			<div class="arrow"></div>
			<div class="arrowt"></div>
		</div>
		<div class='footer-buttons footer-buttons-normal-view footer-button-join-to-learn' id="join-to-learn">
			<div class='field-company'></div>
			<div class='get-join-learn-image'></div>
			<span class='footer-button-title'>Join to Learn!</span>
			<div class="footer-button-body-hidden">
				We are really happy that you are intersted for take a tour to see how OpenCourse would work.
				<div class='action-buttons'>
					<a class='button-wrap'>Join to Learn</a>
				</div>
			</div>
			<div class="arrow"></div>
			<div class="arrowt"></div>
		</div>
		<div class='footer-buttons footer-buttons-normal-view footer-button-join-to-teach' id="join-to-teach">
			<div class='field-company'></div>
			<div class='get-join-teach-image'></div>
			<span class='footer-button-title'>Join to Teach!</span>
			<div class="footer-button-body-hidden">
				We are really happy that you are intersted for take a tour to see how OpenCourse would work.
				<div class='action-buttons'>
					<a class='button-wrap'>Join to Teach</a>
				</div>
			</div>
			<div class="arrow"></div>
			<div class="arrowt"></div>
		</div>
		<!-- Footer -->
		<div class='inside'>
			<div class='container'>
				<div class='footer-panel'>
					<div class='footer-nav-bar'>
						<span class="left">Discover the next generation of digital learning solutions.</span>
						<span class="right">Learn Teach and Share.</span>
						<div class='panel-content'>
							<div class='social-links' id="social-links">
								<ul>
									<li><a href='#' class='link-facebook' title="Visit us on Facebook">facebook</a></li>
									<li><a href='#' class='link-twitter' title="Follow us on Twitter">twitter</a></li>
									<li><a class="link-skype" title="Call us via Skype" href="callto:contact.vishal.jain">Skype</a></li>
									<li><a data-content="" title="You can call us at +91-9424019726" data-toggle="popover" class="link-phone"  href="#">Phone</a></li>
									<li><a class="link-email" title="Write us" href="mailto:contactvishaljain@gmail.com">Write us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('footer.php'); ?>
</div>

