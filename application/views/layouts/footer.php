
		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-6 gtco-widget gtco-footer-paragraph">
						<h3>Density Atlas</h3>
						<p>Density Atlas is a planning, design and development resource for comparing urban densities around the world. The Atlas features a unique metrics system for a comprehensive understanding of urban density.</p>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12 gtco-footer-link">
								<h3>Links</h3>
								<ul class="gtco-list-link">
									<li><a href="<?php echo base_url(); ?>">Home</a></li>
									<li><a href="<?php echo base_url(); ?>measuring">Measuring</a></li>
									<li><a href="<?php echo base_url(); ?>understanding">Understanding</a></li>
									<li><a href="<?php echo base_url(); ?>about">About</a></li>
									<li><a href="<?php echo base_url(); ?>casestudies">Case Studies</a></li>
									<li><a href="<?php echo base_url(); ?>stories">Stories</a></li>
									<br/>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<div class="form-inline">
						<?php echo form_open('casestudies/search'); ?>
						  <div class="form-group">
						    <input type="text" class="form-control" name="keyword" placeholder="Search Case Studies">
						  	<button type="submit" class="btn btn-primary"> <i class="ti-search icon"></i> </button>
						  </div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2016 Free HTML5. All Rights Reserved. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Powered by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END footer -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

	<!-- Main -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	
	<!-- Data Tables -->	
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	</body>
</html>
