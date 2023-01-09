<li class="sidebar-item">
	<a href="<?= site_url('portal-carowner/cars/new'); ?>" class='sidebar-link'>
		<i class="fa fa-plus"></i>
		<span>Add New Car</span>
	</a>
</li>

<li class="sidebar-item has-sub">
	<a href="" class='sidebar-link'>
		<i class="fa fa-car"></i>
		<span>Car Manage</span>
	</a>
	<ul class="submenu ">
		<li class="submenu-item ">
			<a href="<?= site_url('portal-carowner/cars/new'); ?>">Upload</a>
		</li>
		<li class="submenu-item ">
			<a href="<?= site_url('portal-carowner/cars'); ?>">Manage</a>
		</li>
		<li class="submenu-item ">
			<a href="<?= site_url('portal-carowner/ntsa'); ?>">NTSA</a>
		</li>
	</ul>
</li>



<li class="sidebar-item  has-sub">
	<a href="#" class='sidebar-link'>
		<i class="fa fa-car-side"></i>
		<span>Booking</span>
	</a>
	<ul class="submenu ">
		<li class="submenu-item ">
			<a href="">Pending Approval</a>
		</li>
		<li class="submenu-item ">
			<a href="">Approved</a>
		</li>
		<li class="submenu-item ">
			<a href="">Returned</a>
		</li>
		<li class="submenu-item ">
			<a href="<?= site_url('portal-owner/booking'); ?>">All</a>
		</li>
	</ul>
</li>

<li class="sidebar-item d-none">
	<a href="<?= site_url(''); ?>" class='sidebar-link'>
		<i class="fa fa-clipboard-list"></i>
		<span>Leased &amp; Returned</span>
	</a>
</li>

<li class="sidebar-item d-none">
	<a href="<?= site_url(''); ?>" class='sidebar-link'>
		<i class="fa fa-donate"></i>
		<span>Outstanding Fee</span>
	</a>
</li>

<li class="sidebar-item d-none">
	<a href="<?= site_url(''); ?>" class='sidebar-link'>
		<i class="fa fa-dollar-sign"></i>
		<span>Withdraw</span>
	</a>
</li>

<li class="sidebar-item d-none">
	<a href="<?= site_url(''); ?>" class='sidebar-link'>
		<i class="fa fa-outdent"></i>
		<span>Transactions</span>
	</a>
</li>

<li class="sidebar-item d-none">
	<a href="<?= site_url(''); ?>" class='sidebar-link'>
		<i class="fa fa-phone-volume"></i>
		<span>Report &amp; Claims</span>
	</a>
</li>
