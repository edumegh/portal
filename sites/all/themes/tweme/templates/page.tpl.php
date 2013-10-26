<?php

/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */

?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|PT+Serif:400,700' rel='stylesheet' type='text/css'>
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

		<!-- Header -->
		<?php require_once('header.php'); ?>
		<?php endif ?>

		<!--
		<div class='front-page-blocks'>
			<div class="left">
				<div class='block-wrapper'>
					<div class='student'>
						<div class='title'><span>Find Course</span></div>
					</div>
					<div class='panel-content'>
						<div class="dropdown">
						  <a data-toggle="dropdown" href="#" class='btn btn-success'>Select Category</a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li> <a href="#">Management </a></li>
							<li> <a href='#'>Technical </a></li>
						  </ul>
						</div>

						<div class="dropdown">
						  <a data-toggle="dropdown" href="#" class='btn btn-success'>Select School</a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li> <a href="#">School 1 </a></li>
							<li> <a href='#'>School 2 </a></li>
						  </ul>
						</div>
						<div class="dropdown">
						  <a data-toggle="dropdown" href="#" class='btn btn-success'>Select Course</a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li> <a href="#">Course 1 </a></li>
							<li> <a href='#'>Course 2 </a></li>
						  </ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		-->
		<!-- Main -->
		<div id="main">
		  <div class="container">
			<?php print $messages ?>
			<div class="row row-toggle">
			  <?php if ($has_sidebar_first): ?>
			  <!-- Sidebar first -->
			  <aside id="sidebar-first" class="sidebar span3 hidden-phone">
				<?php print render($page['sidebar_first']) ?>
				<?php print render($page['sidebar_first_affix']) ?>
			  </aside>
			  <?php endif ?>
			  <!-- Content -->
			  <section id="content" class="span<?php print $content_cols ?>">
				 <div class='main-content-wrapper'>
					<?php print $preface ?>
					<?php print render($page['content']) ?>
				</div>
			  </section>
			  <?php if ($has_sidebar_second): ?>
			  <!-- Sidebar second -->
			  <aside id="sidebar-second" class="sidebar span3 hidden-phone">
				<?php print render($page['sidebar_second']) ?>
				<?php print render($page['sidebar_second_affix']) ?>
			  </aside>
			  <?php endif ?>
			</div>
			</div>
		</div>
	</div>
	<?php require_once('footer.php'); ?>
</div>

