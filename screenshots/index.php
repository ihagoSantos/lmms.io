<?php
include_once('../header.php');
include_once('../utils.php');
?>
<div class="page-header">
	<h1>Screenshots</h1>
</div>
<div class="row center overflow-hidden">
	<div class="col-lg-4">
		<h4>Song editor</h4>
		<?php make_reflection('/img/ss_song_editor.png', NULL, "white"); ?>
	</div>
	<div class="col-lg-4">
		<h4>Automation editor</h4>
		<?php make_reflection('/img/ss_automation.png', NULL, "white"); ?>
	</div>
	<div class="col-lg-4">
		<h4>B&amp;B editor and the FX-mixer</h4>
		<?php make_reflection('/img/ss_bb_mixer.png', NULL, "white"); ?>
	</div>
	<div class="col-lg-4">
		<h4>Piano Roll editor</h4>
		<?php make_reflection('/img/ss_piano_roll.png', NULL, "white"); ?>
	</div>
	<div class="col-lg-4">
		<h4>Native instruments</h4>
		<?php make_reflection('/img/ss_plugins.png', NULL, "white"); ?>
	</div>
	<div class="col-lg-4">
		<h4>Two VSTi running via Vestige</h4>
		<?php make_reflection('/img/ss_vst.png', NULL, "white"); ?>
	</div>
</div>


<?php ?>
<?php include('../footer.php'); ?>
