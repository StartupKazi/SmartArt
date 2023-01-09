<div class="page-heading">
	<h3>Welcome! <?= $this->CoreData->get_username(); ?></h3>
</div>
<div class="page-content">
	<section class="dashboard">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Car Manage</h4>
					</div>
					<div class="card-body">
						<p>
							Upload, View and Edit <strong>vehicles under your account</strong>.
						</p>
						<br />
						<!-- Button trigger for basic modal -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<a class="btn btn-success block w-100" href="<?= site_url('portal-carowner/cars/new'); ?>"> Upload New</a>
							</div>
							<div class="col-md-6 col-sm-12">
								<a class="btn btn-info block w-100" href="<?= site_url('portal-carowner/cars'); ?>">Manage</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-12 col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Booking</h4>
					</div>
					<div class="card-body">
						<p>
							View and manage <strong>booking under your account</strong>.
						</p>
						<br />
						<!-- Button trigger for basic modal -->
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<a class="btn btn-info block w-100" href="">Pending Approval</a>
							</div>
							<div class="col-md-4 col-sm-12">
								<a class="btn btn-success block w-100" href="">Approved</a>
							</div>

							<div class="col-md-4 col-sm-12">
								<a class="btn btn-warning block w-100" href="">Returned</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Leased &amp; Returned</h4>
						</div>
						<div class="card-body">
							<p>
								List of vehicles you <strong>leased (current with you) and those</strong> your have returned.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-danger block" href="#!">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-clipboard-list"></i>
								View The List
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Payment &amp; Outstanding Fee</h4>
						</div>
						<div class="card-body">
							<p>
								All of your <strong>pending payment &amp; bills</strong> to pay.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-success block" href="#!">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-donate"></i>
								Access Billing
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Cash Withdraw</h4>
						</div>
						<div class="card-body">
							<p>
								View your account <strong>balance, &amp; request withdraw</strong> of funds.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-primary block" href="#!">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-dollar-sign"></i>
								Withdraw
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">All Transaction</h4>
						</div>
						<div class="card-body">
							<p>
								Preview your <strong>spending, incoming &amp; outgoing payment</strong> under your account.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-info block" href="#!">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-outdent"></i>
								My Transactions
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Report &amp; Complain</h4>
						</div>
						<div class="card-body">
							<p>
								View or file <strong>a report, complain &amp; resolve</strong> via this menu.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-warning block" href="#!">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-phone-volume"></i>
								Complains
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">My Account</h4>
						</div>
						<div class="card-body">
							<p>
								View / Edit / Update <strong>your personal account info</strong> here.
							</p>
							<br />
							<!-- Button trigger for basic modal -->
							<a class="btn btn-primary block" href="<?= site_url('portal-profile'); ?>">
								<!-- Font awsome hospital sign icon -->
								<i class="fa fa-user"></i>
								Account
							</a>
						</div>
					</div>
				</div>
			</div>

	</section>
</div>
