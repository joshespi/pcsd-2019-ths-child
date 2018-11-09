<?php include_once(dirname(__FILE__).'/../../../wp-load.php'); ?>
<h1 class="hidden">Main Navigation</h1>
	<ul class="desktop-menu">
		<li><a href="<?php echo get_home_url(); ?>">News</a></li>
		<li class="droppable"><a href="<?php echo get_home_url(); ?>/school-information/">School Information</a>
			<div class="mega-menu">
				<h2>School Information</h2>
				 <?php echo file_get_contents('mega-menu-dropdowns/schoolInfo.php'); ?>
			</div>
		</li>
		<li class="droppable"><a href="<?php echo get_home_url(); ?>/counseling-registration/" aria-haspopup="true">Counseling &amp; Registration</a>
			<div class="mega-menu" aria-label="submenu">
				<h2>Counseling &amp; Registration</h2>
					<?php echo file_get_contents('mega-menu-dropdowns/counseling.php'); ?>
			</div>
		</li>
		<li class="droppable"><a href="<?php echo get_home_url(); ?>/extracurricular/" aria-haspopup="true">Extracurricular</a>
			<div class="mega-menu" aria-label="submenu">
				<h2>Extracurricular</h2>
					<?php echo file_get_contents('mega-menu-dropdowns/extracurricular.php'); ?>
			</div>
		</li>
		<li class="droppable"><a href="<?php echo get_home_url(); ?>/policies-forms/" aria-haspopup="true">Policies &amp; Forms</a>
			<div class="mega-menu" aria-label="submenu">
				<h2>Policies &amp; Forms</h2>
					<?php echo file_get_contents('mega-menu-dropdowns/policies.php'); ?>
			</div>
		</li>
		<li class="droppable"><a href="<?php echo get_home_url(); ?>/faculty-staff/main-office-administration/" aria-haspopup="true">Faculty &amp; Staff</a>
			<div class="mega-menu" aria-label="submenu">
				<h2>Faculty &amp; Staff</h2>
					<?php echo file_get_contents('mega-menu-dropdowns/staff.php'); ?>
			</div>
		</li>
	</ul>
<div  class="mobile-menu">
	<ul>
	   <li><a href="<?php echo get_home_url(); ?>">News</a></li>
	   <li><a href="<?php echo get_home_url(); ?>/school-information/">School Information</a></li>
	   <li><a href="<?php echo get_home_url(); ?>/counseling-registration/">Counseling &amp; Registration</a></li>
	   <li><a href="<?php echo get_home_url(); ?>/extracurricular/">Extracurricular</a></li>
	   <li><a href="<?php echo get_home_url(); ?>/policies-forms/">Policies & Forms</a></li>
	   <li><a href="<?php echo get_home_url(); ?>/faculty-staff/main-office-administration/">Faculty &amp; Staff</a></li>
	</ul>
</div>