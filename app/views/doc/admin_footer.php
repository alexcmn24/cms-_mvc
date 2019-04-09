		</div><!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo URLROOT; ?>/admins/dist/js/adminlte.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap  -->
	<script src="<?php echo URLROOT; ?>/admins/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo URLROOT; ?>/admins/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo URLROOT; ?>/admins/bower_components/chart.js/Chart.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo URLROOT; ?>/admins/dist/js/pages/dashboard2.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo URLROOT; ?>/admins/dist/js/demo.js"></script>
	
	<!-- PRIKAZIVANJE PROFILNE FOTOGRAFIJE -->
	<script src="http://localhost/cms/js/prikazivanje_profilne_fotografije.js"></script>
	<!-- POPUPI -->
	<script src='http://localhost/cms/js/popupi_jquery.js'></script>
	<!-- BOOTSTRAP DATEPICKER -->
	<script src="http://localhost/cms/js/bootstrap-datepicker.js"></script>
	<script src="http://localhost/cms/js/pokretanje_datepicker-a.js"></script>
	
	<?php echo !empty($data['modal_potvrda']) ? $data['modal_potvrda'] : null; ?>
	<?php echo !empty($data['modal_success']) ? $data['modal_success'] : null; ?>
	<?php echo !empty($data['promijeni_lozinku']) ? $data['promijeni_lozinku'] : null; ?>
	
</body>
</html>