<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>My Vehicles</h3>
				<p class="text-subtitle text-muted">All vehicles you have listed</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= site_url('portal') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Cars</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="card-header">
				You can edit and delete your vehicles here.
			</div>
			<div class="card-body">
				<?php if (!empty($dataList)) : ?>
					<table class="table table-striped" id="table1">
						<thead>
							<tr>
								<?php
								$array = get_object_vars($dataList[0]);
								$ths = array_keys($array);
								?>
								<?php for ($i = 0; $i < count($ths); $i++) : ?>
									<?php if ($i == 0) : ?>
										<th>ID</th>
									<?php else : ?>
										<th>
											<?= ucwords(str_replace("_", " ", $ths[$i])); ?>
										</th>
									<?php endif ?>
								<?php endfor ?>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i = 0; $i < count($dataList); $i++) : ?>
								<?php $field_data = $this->CoreCrud->selectFieldItem(array('id' => $dataList[$i]->id)); ?>
								<?php $field_data =  json_decode($field_data[0], True); ?>
								<tr>
									<?php for ($k = 0; $k < count($ths); $k++) :  $key = $ths[$k]; ?>
										<?php $active_column = strtolower($this->plural->singularize($Module)) . '_' . 'flg'; ?>
										<?php if ($key == 'status' || $key == $active_column) : ?>
											<?php if ($dataList[$i]->$key == 1) : ?>
												<td> <span class="badge bg-success">Approved</span> </td>
											<?php else : ?>
												<td> <span class="badge bg-warning">Pending Approval</span> </td>
											<?php endif ?>
										<?php elseif ($key == 'make' || $key == 'model') : ?>
											<td><?= $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $field_data[$key])); ?></td>
										<?php elseif ($key == 'leased') : ?>
											<?php if (array_key_exists('leased', $field_data)) : ?>
												<?php if ($field_data[$key] == 1) : ?>
													<td> <span class="badge bg-success">Leased</span></td>
												<?php else : ?>
													<td> <span class="badge bg-warning">For Lease </span></td>
												<?php endif ?>
											<?php else : ?>
												<td> No : <?= $dataList[$i]->id ?> </td>
											<?php endif ?>
										<?php elseif ($key == 'visibility') : ?>
											<?php if (array_key_exists('visibility', $field_data)) : ?>
												<?php if ($field_data[$key] == 1) : ?>
													<td> <span class="badge bg-success">Public</span> </td>
												<?php else : ?>
													<td> <span class="badge bg-danger">Hidden</span> </td>
												<?php endif ?>
											<?php endif ?>
										<?php elseif ($key == 'payment') : ?>
											<?php if (array_key_exists('ntsa_approved', $field_data)) : ?>
												<?php if ($field_data['ntsa_approved'] == 1) : ?>
													<td>
														<button class="btn btn-sm btn-success">Paid</button>
													</td>
												<?php else : ?>
													<td>
														<?php $billingID = $this->CoreCrud->selectSingleValue('ntsas', 'billing', ['car' => $dataList[$i]->id]); ?>
														<?php $pay_url = site_url('portal-owner/ntsa/payment') . "?inputID=" . $billingID; ?>
														<a href="<?= $pay_url; ?>" class="btn btn-sm btn-info">
															<!-- fa hand pointing -->
															<i class="fa fa-hand-holding-usd"></i>
															Click To Pay With M-Pesa
														</a>
													</td>
												<?php endif; ?>
											<?php endif; ?>
										<?php else : ?>
											<?php $field_data ?>
											<td><?= $dataList[$i]->$key; ?></td>
										<?php endif ?>
									<?php endfor ?>
									<td>
										<?php $edit_url = site_url('portal-owner/car/edit') . "?inputID=" . $dataList[$i]->id; ?>
										<a href="<?= $edit_url; ?>" class="btn btn-primary btn-sm">
											<i class="fa fa-pencil-alt"></i> Edit
										</a>

										<?php $delete_url = site_url('portal_car/delete') . "?inputID=" . $dataList[$i]->id; ?>
										<!-- <a onclick="deleteCheck('<?= $delete_url; ?>');" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </a> -->
										<!-- if $field_data['leased'] == 1 show not for lease -->
										<?php if ($field_data['visibility'] == 1) : ?>
											<?php $unlease_url = site_url('portal-owner/car/multiple') . "?action=hide&inputID=" . $dataList[$i]->id; ?>
											<a href="<?= $unlease_url; ?>" class="btn btn-danger btn-sm">
												<i class="fa fa-times"></i> Remove From Lease List
											</a>
										<?php else : ?>
											<?php $forlease_url = site_url('portal-owner/car/multiple') . "?action=show&inputID=" . $dataList[$i]->id; ?>
											<a href="<?= $forlease_url; ?>" class="btn btn-success btn-sm">
												<i class="fa fa-check"></i> Add On Lease List
											</a>
										<?php endif ?>
									</td>
								</tr>
							<?php endfor ?>
						</tbody>
					</table>
				<?php else : ?>
					<div class="table-responsive">
						<table class="table mb-0">
							<hr>
							<p class="text-center"><strong>This request current has no data</strong></p>
							<hr>
						</table>
					</div>

				<?php endif ?>

			</div>
		</div>

	</section>
</div>

<script>
	// Simple Datatable
	let table1 = document.querySelector('#table1');
	let dataTable = new simpleDatatables.DataTable(table1);
</script>
