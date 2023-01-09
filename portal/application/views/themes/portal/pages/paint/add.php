<?php $this->load->view("$child_theme_dir/pages/owners/car/assets"); ?>

<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Add Vehicles</h3>
				<p class="text-subtitle text-muted">Upload/list your vehicle</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= site_url('portal') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Car</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<!-- Make, Model -->
	<section>
		<form action="<?= site_url($form_save) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
			<?= (!is_null($notify) && !empty($notify)) ? $notify : ''; ?>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Make <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select class="form-select" name="make" id="make">
													<option selected disabled="">--- Select Make ---</option>
													<?php foreach ($kim_make as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('make', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
											</fieldset>
											<span class="error"><?= form_error('make'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Model <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select class="form-select" name="model" id="model">
													<option>--- Select Make First ---</option>
													<?php foreach ($kim_model as $key => $value) : ?>
														<option parent="<?= $value->parent; ?>" value="<?= $value->id; ?>" <?= set_select('make', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
											</fieldset>
											<span class="error"><?= form_error('model'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Year <small>(Year of manufacture)</small> <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="year" class="form-select">
													<?php $year = date('Y'); ?>
													<?php $max_year = $year; ?>
													<?php for ($i = $max_year; $i > $max_year - 13; $i--) : ?>
														<option <?= set_select('year', $i); ?> value="<?= $i; ?>"><?= ucwords($i) ?></option>
													<?php endfor ?>
												</select>
												<span class="error"><?= form_error('year'); ?></span>
											</fieldset>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Body Type <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="body_type" class="form-select">
													<?php foreach ($kim_body as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('body_type', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
												<span class="error"><?= form_error('body_type'); ?></span>
											</fieldset>
										</div>
									</div>
								</div>

								<!-- row 2 -->
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Transmission <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select class="form-select" name="transmission">
													<?php foreach ($kim_transmission as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('transmission', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
											</fieldset>
											<span class="error"><?= form_error('transmission'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Fuel Type <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select class="form-select" name="fuel_type">
													<?php foreach ($kim_fuel as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('fuel_type', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
											</fieldset>
											<span class="error"><?= form_error('fuel_type'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Exterior Color <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="exterior_color" class="form-select">
													<?php foreach ($kim_exterior as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('exterior_color', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
												<span class="error"><?= form_error('exterior_color'); ?></span>
											</fieldset>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>No Seat <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="no_seat" class="form-select">
													<?php foreach ($kim_seats as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('no_seat', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
												<span class="error"><?= form_error('no_seat'); ?></span>
											</fieldset>
											<span class="error"><?= form_error('no_seat'); ?></span>
										</div>
									</div>
								</div>

								<!-- row 3 -->
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Number Plate <i class="fa fa-asterisk"></i></h6>
											<input type="text" name="number_plate" value="<?= set_value('number_plate'); ?>" class="form-control" placeholder="Reg Number Plate">
											<span class="error"><?= form_error('number_plate'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Engine Size </h6>
											<input type="number" name="engine_size" value="<?= set_value('engine_size'); ?>" class="form-control" placeholder="Enter Engine cc number">
											<span class="error"><?= form_error('engine_size'); ?></span>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<!-- row 1 -->
								<div class="row">
									<div class="col-md-2 col-sm-12">
										<div class="form-group mb-3">
											<h6>County <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="county" class="form-select" id="county">
													<option value="0">Select County</option>
													<?php foreach ($kim_county as $key => $value) : ?>
														<option value="<?= $value->id; ?>" <?= set_select('county', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
												<span class="error"><?= form_error('county'); ?></span>
											</fieldset>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<div class="form-group mb-3">
											<h6>Constituency <i class="fa fa-asterisk"></i></h6>
											<fieldset class="form-group">
												<select name="constituency" class="form-select" id="constituency">
													<option value="0">Select Constituency</option>
													<?php foreach ($kim_subcounty as $key => $value) : ?>
														<option parent="<?= $value->parent; ?>" value="<?= $value->id; ?>" <?= set_select('constituency', $value->id); ?>>
															<?= stripslashes(ucwords($value->title)) ?>
														</option>
													<?php endforeach; ?>
												</select>
												<span class="error"><?= form_error('constituency'); ?></span>
											</fieldset>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<!-- row 1 -->
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<h6>Comfort </h6>
										<div class="form-check">
											<?php foreach ($kim_comfort as $key => $value) : ?>
												<div class="checkbox mb-1">
													<input type="checkbox" <?= set_checkbox('comfort', $value->id); ?> name="comfort[]" class="form-check-input" value="<?= $value->id; ?>">
													<label for="checkbox1"><?= stripslashes(ucwords($value->title)) ?></label>
												</div>
											<?php endforeach; ?>
											<span class="error"><?= form_error('comfort'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Entertainment </h6>
										<div class="form-check">
											<?php foreach ($kim_entertainment as $key => $value) : ?>
												<div class="checkbox mb-1">
													<input type="checkbox" <?= set_checkbox('entertainment', $value->id); ?> name="entertainment[]" class="form-check-input" value="<?= $value->id; ?>">
													<label for="checkbox1"><?= stripslashes(ucwords($value->title)) ?></label>
												</div>
											<?php endforeach; ?>
											<span class="error"><?= form_error('entertainment'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Safety </h6>
										<div class="form-check">
											<?php foreach ($kim_safety as $key => $value) : ?>
												<div class="checkbox mb-1">
													<input type="checkbox" <?= set_checkbox('safety', $value->id); ?> name="safety[]" class="form-check-input" value="<?= $value->id; ?>">
													<label for="checkbox1"><?= stripslashes(ucwords($value->title)) ?></label>
												</div>
											<?php endforeach; ?>
											<span class="error"><?= form_error('safety'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Windows </h6>
										<div class="form-check">
											<?php foreach ($kim_window as $key => $value) : ?>
												<div class="checkbox mb-1">
													<input type="checkbox" <?= set_checkbox('windows', $value->id); ?> name="windows[]" class="form-check-input" value="<?= $value->id; ?>">
													<label for="checkbox1"><?= stripslashes(ucwords($value->title)) ?></label>
												</div>
											<?php endforeach; ?>
											<span class="error"><?= form_error('windows'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<!-- row 1 -->
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<h6>Main Image <i class="fa fa-asterisk"></i></h6>
										<fieldset>
											<div class="input-group mt-5">
												<div class="image-box">
													<img class="rounded customFile_preview w-100 mb-5" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
												</div>
												<div class="row">
													<input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control custom-file-input main-image" id="customFile" name="main_image[]">
												</div>
											</div>
											<span class="error"><?= form_error('main_image') ?></span>
										</fieldset>
									</div>

									<div class="col-md-8 col-sm-12">
										<h6>More Image <small>(maximum 18 files)</small><i class="fa fa-asterisk"></i></h6>
										<fieldset>
											<div class="input-group">
												<div class="image-innostudio w-100">
													<input type="file" name="upload_photo[]" accept="image/png, image/jpg, image/jpeg" multiple class="innostudio-upload">
													<span class="error"><?= form_error('upload_photo') ?></span>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<!-- row 1 -->
								<div class="row">

									<div class="col-md-6 col-sm-12">
										<h6>Tracker <i class="fa fa-asterisk"></i></h6>
										<div class="form-check">
											<div class="checkbox mb-1">
												<?php $tracker_1 = "vehicle has tracker"; ?>
												<input type="radio" <?= set_checkbox('tracker', $tracker_1); ?> name="tracker" class="form-check-input" value="<?= $tracker_1; ?>">
												<label for="checkbox1">I Acknowledge that this vehicle uploaded has insurer aprroved tracker.</label>
											</div>
											<div class="checkbox mb-1">
												<?php $tracker_2 = "vehicle missing approved tracker"; ?>
												<input type="radio" <?= set_checkbox('tracker', $tracker_2); ?> name="tracker" class="form-check-input" value="<?= $tracker_2; ?>">
												<label for="checkbox1">I Acknowledge that this vehicle uploaded has no/has none approved tracker.</label>
											</div>
											<span class="error"><?= form_error('tracker'); ?></span>
										</div>
									</div>

									<div class="col-md-6 col-sm-12">
										<h6>Accountable <i class="fa fa-asterisk"></i></h6>
										<div class="form-check">
											<?php $acc_value = "am accountable for any damage"; ?>
											<div class="checkbox mb-1">
												<input type="checkbox" <?= set_checkbox('accountable', $acc_value); ?> name="accountable" class="form-check-input" value="<?= $acc_value; ?>" required>
												<label for="checkbox1">In scenario of car damage and theft, I will not involve KimKel with the matter</label>
											</div>
											<span class="error"><?= form_error('accountable'); ?></span>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<!-- row 1 -->
								<div class="row">
									<!-- Boostrap offset div by 4 cols -->
									<div class="col-md-5 offset-md-7 col-sm-12">
										<fieldset>
											<div class="input-group">
												<button type="submit" class="btn icon icon-left btn-success w-100">
													<i class="fa fa-check"></i>
													Upload Vehicle
												</button>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</form>
	</section>


</div>
