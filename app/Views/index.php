<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dashboard Tugas Grafik</title>

	<!-- Bootstrap -->
	<link href="<?= base_url('/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url('/dashboard/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url('/dashboard/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="<?= base_url('/dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>"
		rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url('/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url('/dashboard/build/css/custom.min.css') ?>" rel="stylesheet">

	<style>
		.panel_toolbox {
			min-width: 0 !important;
		}
	</style>
</head>

<body class="nav-md">
	<?php 
		$session = session();
		$error = $session->getFlashdata('error');
		$success = $session->getFlashdata('success');
    ?>
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><span>Dashboard Tugas</span></a>
					</div>

					<div class="clearfix"></div>

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Dashboard</a></li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<div class="user-profile"><img src="https://i.pravatar.cc/50" alt="">Johan</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="row">
					<?php if($error){ ?>
						<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 50px;">
							<div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
								<div class="toast-header bg-danger">
								<strong class="mr-auto text-white">Gagal</strong>
								<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="toast-body">
								<?= $error; ?>
								</div>
							</div>
						</div>
						<!-- <h1>gagal</h1> -->
					<?php } ?>
					<?php if($success){ ?>
						<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 50px;">
							<div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
								<div class="toast-header bg-success">
								<strong class="mr-auto text-white">Berhasil</strong>
								<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="toast-body">
								<?= $success; ?>
								</div>
							</div>
						</div>
					<?php } ?>

					<div class="col-md-12 col-sm-12">
						<h3>Laporan Penjualan</h3>
						<form action="<?= base_url('laporan') ?>" method="post">
							<div class="form-row align-items-center">
								<div class="col-auto">
									<label class="sr-only" for="inlineFormInputGroup">Username</label>
									<div class="input-group mb-2">
										<select name="start_periode" class="custom-select" id="inlineFormInputGroup" required>
											<option value="" selected disabled>-- Pilih Tahun Mulai --</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
										</select>
										<div class="input-group-prepend">
											<div class="input-group-text">-</div>
										</div>
										<select name="end_periode" class="custom-select" id="inlineFormInputGroup" required>
											<option value="" selected disabled>-- Pilih Tahun Akhir --</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
										</select>
									</div>
								</div>
								<div class="col-auto">
									<button type="submit" class="btn btn-primary mb-2">Laporan PDF</button>
								</div>
							</div>
						</form>
						<hr>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Total Penjualan Perbulan</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<canvas id="lineChart"></canvas>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="x_panel">
							<div class="x_title">
								<h2>Penjualan Per Produk (All Periode)</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<canvas id="mybarChart"></canvas>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="x_panel">
							<div class="x_title">
								<h2>5 Produk Terlaris</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<canvas id="pieChart"></canvas>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /page content -->

		<!-- footer content -->
		<footer>
			<div class="pull-right">
				Tugas Johan - 41519010033
			</div>
			<div class="clearfix"></div>
		</footer>
		<!-- /footer content -->
	</div>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url('/dashboard/vendors/jquery/dist/jquery.min.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('/dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- FastClick -->
	<script src="<?= base_url('/dashboard/vendors/fastclick/lib/fastclick.js') ?>"></script>
	<!-- NProgress -->
	<script src="<?= base_url('/dashboard/vendors/nprogress/nprogress.js') ?>"></script>
	<!-- Chart.js -->
	<script src="<?= base_url('/dashboard/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
	<!-- jQuery Sparklines -->
	<script src="<?= base_url('/dashboard/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?= base_url('/dashboard/build/js/custom.js') ?>"></script>

	<?php 
		foreach ($pj2019 as $pjs2019) {
			$bulan19[] = $pjs2019['bulan'];
			$thn19[] = $pjs2019['tahun'];
			$total19[] = $pjs2019['total'];
		}

		foreach ($pj2021 as $pjs2021) {
			$bulan21[] = $pjs2021['bulan'];
			$thn21[] = $pjs2021['tahun'];
			$total21[] = $pjs2021['total'];
		}

		foreach ($pjl_produk as $pjls_produk) {
			$nama_produk[] = $pjls_produk['nama_produk'];
			$terjual[] = $pjls_produk['terjual'];
		}

		foreach ($produk_teratas as $produk_teratass) {
			$nama_produk_teratas[] = $produk_teratass['nama_produk'];
			$terjual_teratas[] = $produk_teratass['terjual'];
		}
	?>

	<script>
		// Line chart
		if ($('#lineChart').length) {

			var ctx = document.getElementById("lineChart");
			var lineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: <?= json_encode($bulan19) ?>,
					datasets: [{
						label: <?= json_encode($thn19[0]) ?>,
						backgroundColor: "rgba(38, 185, 154, 0.31)",
						borderColor: "rgba(38, 185, 154, 0.7)",
						pointBorderColor: "rgba(38, 185, 154, 0.7)",
						pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: "rgba(220,220,220,1)",
						pointBorderWidth: 1,
						data: <?= json_encode($total19) ?>
					}, {
						label: <?= json_encode($thn21[0]) ?>,
						backgroundColor: "rgba(3, 88, 106, 0.3)",
						borderColor: "rgba(3, 88, 106, 0.70)",
						pointBorderColor: "rgba(3, 88, 106, 0.70)",
						pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: "rgba(151,187,205,1)",
						pointBorderWidth: 1,
						data: <?= json_encode($total21) ?>
					}]
				},
			});

		}

		// Bar chart
		if ($('#mybarChart').length) {

			var ctx = document.getElementById("mybarChart");
			var mybarChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: <?= json_encode($nama_produk) ?>,
					datasets: [{
						label: 'Penjualan Per Produk',
						backgroundColor: "#26B99A",
						data: <?= json_encode($terjual) ?>
					}]
				},

				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});

		}

		// Pie chart
		if ($('#pieChart').length) {

			var ctx = document.getElementById("pieChart");
			var data = {
				datasets: [{
					data: <?= json_encode($terjual_teratas) ?>,
					backgroundColor: [
						"#455C73",
						"#9B59B6",
						"#BDC3C7",
						"#26B99A",
						"#3498DB"
					],
					label: '5 Produk Terlaris' // for legend
				}],
				labels: <?= json_encode($nama_produk_teratas) ?>
			};

			var pieChart = new Chart(ctx, {
				data: data,
				type: 'pie',
				otpions: {
					legend: false
				}
			});

		}

		$('.toast').toast('show');
	</script>

</body>

</html>