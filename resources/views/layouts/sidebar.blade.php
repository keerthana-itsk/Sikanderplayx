<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Sikender</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			 <!--navigation-->
			 <ul class="metismenu" id="menu">
				<li>
				  <a href="">
					<div class="parent-icon"><i class="bx bx-home-circle"></i></div>
					<div class="menu-title">Dashboard</div>
				  </a>
				</li>
				<li>
				  <a href="#" class="has-arrow">
					<div class="parent-icon"><i class="bx bx-category"></i></div>
					<div class="menu-title">User</div>
				  </a>
				  <ul>
					<li>
					  <a href="{{ route('UserRegister.index') }}"
						><i class="bx bx-right-arrow-alt"></i>All User</a
					  >
					</li>
				  </ul>
				</li>
				<li>
				  <a href="#" class="has-arrow">
					<div class="parent-icon"><i class="bx bx-category"></i></div>
					<div class="menu-title">Payments</div>
				  </a>
				  <ul>
					<li>
					  <a href="{{ route('payment.index') }}"
						><i class="bx bx-right-arrow-alt"></i>All Payments</a
					  >
					</li>
					<li>
					  <a href="{{ route('deposit.index') }}"
						><i class="bx bx-right-arrow-alt"></i>All  Deposit</a
					  >
					</li>
					<li>
					  <a href="{{ route('withdraw.index') }}"
						><i class="bx bx-right-arrow-alt"></i>All Withdraw</a
					  >
					</li>
				  </ul>
				</li>

				<li>
				  <a href="#" class="has-arrow">
					<div class="parent-icon"><i class="bx bx-category"></i></div>
					<div class="menu-title">Reports</div>
				  </a>
				  <ul>
					<li>
					  <a href=""
						><i class="bx bx-right-arrow-alt"></i>User Reports</a
					  >
					</li>
					<li>
					  <a href=""
						><i class="bx bx-right-arrow-alt"></i>Payments</a
					  >
					</li>
				  </ul>
				</li>
				<!--
					  <li>
						  <a href="javascript:;" class="has-arrow">
							  <div class="parent-icon"><i class="bx bx-category"></i>
							  </div>
							  <div class="menu-title">Reports</div>
						  </a>
						  <ul>
							  <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>User Reports</a>
							  </li>
							  <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Payments</a>
							  </li>


						  </ul>
					  </li> -->
			  </ul>
			  <!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
