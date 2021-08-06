<div id="page-wrapper">
	<div class="header">
		<h1 class="page-header">
			Dashboard
		</h1>
	</div>

	<!-- content -->
	<div id="page-inner">
		<div class="dashboard-cards">
			<div class="row">
				<!-- SK kematian-->
				<a href="<?= base_url('admin/kematian') ?>">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
							<div class="card-stacked red">
								<div class="card-content">
									<h3><?= $kematian->num_rows(); ?></h3>
								</div>
								<div class="card-action">
									<strong> SK Kematian </strong>
								</div>
							</div>
						</div>
					</div>
				</a>

				<!-- SP akte kelahiran -->
				<a href="<?= base_url('admin/akte_kelahiran') ?>">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
							<div class="card-stacked orange">
								<div class="card-content">
									<h3><?= $akte->num_rows(); ?></h3>
								</div>
								<div class="card-action">
									<strong> SP Akte Kelahiran</strong>
								</div>
							</div>
						</div>
					</div>
				</a>

				<!-- Sk Tempat tinggal -->
				<a href="<?= base_url('admin/tempat_tinggal') ?>">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
							<div class="card-stacked blue">
								<div class="card-content">
									<h3><?= $tempat_tinggal->num_rows(); ?></h3>
								</div>
								<div class="card-action">
									<strong> SK Tempat Tinggal </strong>
								</div>
							</div>
						</div>
					</div>
				</a>

				<!-- KK Baru -->
				<a href="<?= base_url('admin/kartu_keluarga') ?>">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
							<div class="card-stacked green">
								<div class="card-content">
									<h3><?= $kk->num_rows(); ?></h3>
								</div>
								<div class="card-action">
									<strong> Kartu Keluraga Baru </strong>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row" style="margin-top: 100px;">
			<div class="col-12">
				<canvas id="myChart" width="100%" height="30px"></canvas>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<script>
			const labels_all = [
				'January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December',
			];
			const data = {
				labels: labels_all,
				datasets: [{
					label: 'Grafik Seluruh Permohonan',
					backgroundColor: 'rgb(255, 99, 132)',
					borderColor: 'rgb(255, 99, 132)',
					data: [
						<?= $Jan; ?>,
						<?= $Feb; ?>,
						<?= $Mar; ?>,
						<?= $Apr; ?>,
						<?= $May; ?>,
						<?= $Jun; ?>,
						<?= $Jul; ?>,
						<?= $Aug; ?>,
						<?= $Sep; ?>,
						<?= $Oct; ?>,
						<?= $Nov; ?>,
						<?= $Dec; ?>,
					],
				}]
			};
			const config = {
				type: 'line',
				data,
				options: {}
			};

			var myChart = new Chart(
				document.getElementById('myChart'),
				config
			);
		</script>

		<!-- Footer -->
		<footer>
			<p>All right reserved.</p>
		</footer>
	</div>