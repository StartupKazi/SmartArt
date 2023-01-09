<footer>
	<div class="footer clearfix mb-0 text-muted">
		<div class="float-start">
			<p><?= date('Y'); ?> &copy; SMART ART</p>
		</div>
		<div class="float-end">
			<p>All rights reserved. <a href="#"> smartart</a></p>
		</div>
	</div>
</footer>
</div>
</div>
<!-- Please wait -->

<script src="<?= base_url($child_theme_assets); ?>/assets/vendors/jquery/jquery.min.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/js/pages/dashboard.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/js/mazer.js"></script>

<script src="<?= base_url($child_theme_assets); ?>/assets/vendors/fontawesome/all.min.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/vendors/simple-datatables/simple-datatables.js"></script>

<script src="<?= base_url($child_theme_assets); ?>/assets/vendors/choices.js/choices.min.js"></script>
<script src="<?= base_url($child_theme_assets); ?>/assets/js/pages/form-element-select.js"></script>

<input type="hidden" id="base_url_link" value="<?= site_url(); ?>">
<script src="<?= base_url($custom_assets); ?>/js/portal.js?<?= time(); ?>"></script>

<!-- Include Footer -->
<?php $this->load->view("$child_theme_dir/functions/incl_footer"); ?>
<!-- End Include Footer -->

<script type="text/javascript">
	// Simple Datatable
	$(window).on("load", function() {
		// Animate loader off screen
		// $(".se-pre-con").fadeOut("slow");
	});
</script>

</body>

</html>
