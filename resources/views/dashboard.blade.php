<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />

	@include('layouts.user_link')
	<title>Dashtrans - Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		@include('layouts.sidebar')
	  <!--start header -->
      @include('layouts.header')
      <!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row ">

					<div class="col-md-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total User</p>
										<h4 class="my-1">8.4K</h4>
										<p class="mb-0 font-13"><i class="bx bxs-up-arrow align-middle"></i>14.5% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
								<!-- <div id="chart2"></div> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Deposit</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13"><i class="bx bxs-down-arrow align-middle"></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
								<!-- <div id="chart3"></div> -->
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Deposit</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13"><i class="bx bxs-down-arrow align-middle"></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
								<!-- <div id="chart3"></div> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">NET</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13"><i class="bx bxs-down-arrow align-middle"></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
								<!-- <div id="chart3"></div> -->
							</div>
						</div>
					</div>
				</div>
				<!--end row-->


				<!-- double card -->
				<div class="row">
					<div class="col-md-6">
						<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Recent Users</h5>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>ID</th>
											<th>User Name</th>
											<th>User ID</th>
											<th>Mobile Number</th>
											<th>Branch owner</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>12344</td>
											<td>9876543210</td>
											<td>Ariyan</td>

										</tr>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>12344</td>
											<td>9876543210</td>
											<td>Ariyan</td>

										</tr>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>12344</td>
											<td>9876543210</td>
											<td>Ariyan</td>

										</tr>

									</tbody>
								</table>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Recent Deposit</h5>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>ID</th>
											<th>User Name</th>
											<th>User ID</th>
											<th>Platform</th>
											<th>Amount</th>
											<th>Transaction </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>25252</td>
											<td>sikender</td>
											<td>2000</td>
											<td>1873373777</td>

										</tr>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>25252</td>
											<td>sikender</td>
											<td>2000</td>
											<td>1873373777</td>

										</tr>
										<tr>
											<td>#897656</td>
											<td>Kamal</td>
											<td>25252</td>
											<td>sikender</td>
											<td>2000</td>
											<td>1873373777</td>

										</tr>

									</tbody>
								</table>
							</div>
						</div>
						</div>
					</div>
				</div>
				<!-- double card end-->
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Recent Withdraw</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>User ID</th>
										<th>Mobile Number</th>
										<th>Withdraw</th>
										<th>Transcation Details</th>
										<th>Rolling Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#897656</td>
										<td>Kamal</td>
										<td>242525</td>
										<td>9876543210</td>
										<td>2000</td>
										<td>9876787888</td>
										<td>Completed</td>
									</tr>
									<tr>
										<td>#897656</td>
										<td>Kamal</td>
										<td>242525</td>
										<td>9876543210</td>
										<td>2000</td>
										<td>9876787888</td>
										<td>Completed</td>
									</tr>
									<tr>
										<td>#897656</td>
										<td>Kamal</td>
										<td>242525</td>
										<td>9876543210</td>
										<td>2000</td>
										<td>9876787888</td>
										<td>Completed</td>
									</tr>
									<tr>
										<td>#897656</td>
										<td>Kamal</td>
										<td>242525</td>
										<td>9876543210</td>
										<td>2000</td>
										<td>9876787888</td>
										<td>Completed</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('layouts.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->

    @include('layouts.user_script')

	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="assets/js/index.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>
