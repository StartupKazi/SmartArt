<?php $this->load->view("$child_theme_dir/pages/owners/car/assets"); ?>

<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Edit Vehicles</h3>
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
		<form action="<?= site_url($form_edit) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
			<?= (!is_null($notify) && !empty($notify)) ? $notify : ''; ?>

			<?php
			$main_site_url = base_url('');
			$fieldID = $resultList[0]->id;
			?>

			<input type="hidden" name="id" value="<?= $resultList[0]->id; ?>">
			<?php $data = json_decode($resultList[0]->data, True); ?>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-content">
							<div class="card-body mb-1">
								<?php if (!$disableEdit) : ?>
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Make <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<select class="form-select" name="make" id="make">
														<?php for ($i = 0; $i < count($make); $i++) : ?>
															<option <?= (stripcslashes($data['make']) == $make[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($make[$i]->inheritance_id) ?>"><?= ucwords($make[$i]->inheritance_title) ?></option>
														<?php endfor ?>
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
														<?php for ($i = 0; $i < count($model); $i++) : ?>
															<option <?= (stripcslashes($data['model']) == $model[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($model[$i]->inheritance_id) ?>"><?= ucwords($model[$i]->inheritance_title) ?></option>
														<?php endfor ?>
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
														<?php for ($i = $max_year; $i > $max_year - 30; $i--) : ?>
															<option <?= (stripcslashes($data['year']) == $i) ? 'selected' : ''; ?> value="<?= $i ?>"> <?= ucwords($i) ?></option>
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
														<?php for ($i = 0; $i < count($body); $i++) : ?>
															<option <?= (stripcslashes($data['body_type']) == $body[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($body[$i]->inheritance_id) ?>"><?= ucwords($body[$i]->inheritance_title) ?></option>
														<?php endfor ?>
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
														<?php for ($i = 0; $i < count($transmission); $i++) : ?>
															<option <?= (stripcslashes($data['transmission']) == $transmission[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($transmission[$i]->inheritance_id) ?>"><?= ucwords($transmission[$i]->inheritance_title) ?></option>
														<?php endfor ?>
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
														<?php for ($i = 0; $i < count($fuel); $i++) : ?>
															<option <?= (stripcslashes($data['fuel_type']) == $fuel[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($fuel[$i]->inheritance_id) ?>"><?= ucwords($fuel[$i]->inheritance_title) ?></option>
														<?php endfor ?>
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
														<?php for ($i = 0; $i < count($exteriorcolor); $i++) : ?>
															<option <?= (stripcslashes($data['exterior_color']) == $exteriorcolor[$i]->inheritance_id) ? 'selected' : ''; ?> value="<?= strtolower($exteriorcolor[$i]->inheritance_id) ?>"><?= ucwords($exteriorcolor[$i]->inheritance_title) ?></option>
														<?php endfor ?>
													</select>
													<span class="error"><?= form_error('exterior_color'); ?></span>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>No Seat <i class="fa fa-asterisk"></i></h6>
												<input type="number" name="no_seat" min="1" value="<?= $data['no_seat']; ?>" class="form-control" placeholder="No of seats your car have">
												<span class="error"><?= form_error('no_seat'); ?></span>
											</div>
										</div>

									</div>

									<!-- row 3 -->
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Number Plate <i class="fa fa-asterisk"></i></h6>
												<input type="text" name="number_plate" value="<?= $data['number_plate']; ?>" class="form-control" placeholder="Reg Number Plate">
												<span class="error"><?= form_error('number_plate'); ?></span>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Engine Size </h6>
												<input type="number" name="engine_size" value="<?= $data['engine_size']; ?>" class="form-control" placeholder="Enter Engine cc number">
												<span class="error"><?= form_error('engine_size'); ?></span>
											</div>
										</div>

									</div>
								<?php else : ?>
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Make <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['make'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Model <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['model'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Year <small>(Year of manufacture)</small> <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<input type="text" value="<?= $data['year']; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Body Type <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['body_type'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
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
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['transmission'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Fuel Type <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['fuel_type'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Exterior Color <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<?php $show_info = $this->CoreCrud->selectSingleValue('inheritances', 'title', array('id' => $data['exterior_color'])); ?>
													<input type="text" value="<?= $show_info; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>No Seat <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<input type="text" value="<?= $data['no_seat']; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>
									</div>

									<!-- row 3 -->
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Number Plate <i class="fa fa-asterisk"></i></h6>
												<fieldset class="form-group">
													<input type="text" value="<?= $data['number_plate']; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

										<div class="col-md-3 col-sm-12">
											<div class="form-group mb-3">
												<h6>Engine Size </h6>
												<fieldset class="form-group">
													<input type="text" value="<?= $data['engine_size']; ?>" class="form-control" disabled>
												</fieldset>
											</div>
										</div>

									</div>

								<?php endif; ?>
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
													<?php for ($i = 0; $i < count($county); $i++) : ?>
														<?php
														$set_value = $county[$i]->inheritance_id;
														$set_option = $county[$i]->inheritance_title;
														?>
														<option <?= ($data['county'] == $set_value) ? 'selected' : ''; ?> value="<?= $set_value; ?>"><?= ucwords($set_option) ?></option>
													<?php endfor ?>
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
													<?php for ($i = 0; $i < count($constituency); $i++) : ?>
														<?php
														$set_parent = $constituency[$i]->inheritance_parent;
														$set_value = $constituency[$i]->inheritance_id;
														$set_option = $constituency[$i]->inheritance_title;
														?>
														<option parent="<?= $set_parent; ?>" <?= ($data['constituency'] == $set_value) ? 'selected' : ''; ?> value="<?= $set_value; ?>"><?= ucwords($set_option) ?></option>
													<?php endfor ?>
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
											<?php for ($i = 0; $i < count($comfort); $i++) : ?>
												<?php
												$set_value = $comfort[$i]->inheritance_id;
												$set_option = $comfort[$i]->inheritance_title;
												$data['comfort'] = (is_null($data['comfort'])) ? array() : $data['comfort'];
												$checked = (in_array($set_value, $data['comfort'])) ? 'checked' : '';
												?>
												<div class="checkbox mb-1">
													<input type="checkbox" <?= $checked; ?> name="comfort[]" class="form-check-input" value="<?= $set_value; ?>">
													<label for="checkbox1"><?= ucwords($set_option) ?></label>
												</div>
											<?php endfor ?>
											<span class="error"><?= form_error('comfort'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Entertainment </h6>
										<div class="form-check">
											<?php for ($i = 0; $i < count($entertainment); $i++) : ?>
												<?php
												$set_value = $entertainment[$i]->inheritance_id;
												$set_option = $entertainment[$i]->inheritance_title;
												$data['entertainment'] = (is_null($data['entertainment'])) ? array() : $data['entertainment'];
												$checked = (in_array($set_value, $data['entertainment'])) ? 'checked' : '';
												?>

												<div class="checkbox mb-1">
													<input type="checkbox" <?= $checked; ?> name="entertainment[]" class="form-check-input" value="<?= $set_value; ?>">
													<label for="checkbox1"><?= ucwords($set_option) ?></label>
												</div>
											<?php endfor ?>
											<span class="error"><?= form_error('entertainment'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Safety </h6>
										<div class="form-check">
											<?php for ($i = 0; $i < count($safety); $i++) : ?>
												<?php
												$set_value = $safety[$i]->inheritance_id;
												$set_option = $safety[$i]->inheritance_title;
												$data['safety'] = (is_null($data['safety'])) ? array() : $data['safety'];
												$checked = (in_array($set_value, $data['safety'])) ? 'checked' : '';
												?>

												<div class="checkbox mb-1">
													<input type="checkbox" <?= $checked; ?> name="safety[]" class="form-check-input" value="<?= $set_value; ?>">
													<label for="checkbox1"><?= ucwords($set_option) ?></label>
												</div>
											<?php endfor ?>
											<span class="error"><?= form_error('safety'); ?></span>
										</div>
									</div>

									<div class="col-md-3 col-sm-12">
										<h6>Windows </h6>
										<div class="form-check">
											<?php for ($i = 0; $i < count($windows); $i++) : ?>
												<?php
												$set_value = $windows[$i]->inheritance_id;
												$set_option = $windows[$i]->inheritance_title;
												$data['windows'] = (is_null($data['windows'])) ? array() : $data['windows'];
												$checked = (in_array($set_value, $data['windows'])) ? 'checked' : '';
												?>

												<div class="checkbox mb-1">
													<input type="checkbox" <?= $checked; ?> name="windows[]" class="form-check-input" value="<?= $set_value; ?>">
													<label for="checkbox1"><?= ucwords($set_option) ?></label>
												</div>
											<?php endfor ?>
											<span class="error"><?= form_error('windows'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php if (!$disableEdit) : ?>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-content">
								<div class="card-body mb-1">
									<!-- row 1 -->
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<h6>Main Image </h6>
											<fieldset>
												<div class="input-group mt-5">
													<div class="image-box mb-1">
														<?php $main_image = json_decode($data['main_image'], True); ?>
														<img class="rounded customFile_preview w-100" src="<?= $main_site_url . '/' . $main_image[0]; ?>">
													</div>
													<div class="row mt-5">
														<input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control custom-file-input main-image mt-1" id="customFile" name="main_image[]">
													</div>
												</div>
												<span class="error"><?= form_error('main_image') ?></span>
											</fieldset>
										</div>

										<div class="col-md-8 col-sm-12">
											<h6>More Image <small>(maximum 18 files)</small></h6>
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
			<?php endif; ?>

			<!-- images -->
			<div class="row">
				<div class="col-lg-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="form-images">
								<div class="row">
									<?php if (array_key_exists('upload_photo', $data)) : ?>
										<?php $upload_photo = json_decode($data['upload_photo'], True);  ?>
										<?php
										if (!is_null($upload_photo)) {
											$edit_keys = array_keys($upload_photo);
											$upload_photo_no = end($edit_keys);
										} else {
											$upload_photo_no = -1;
										}
										?>
									<?php else : ?>
										<?php $upload_photo_no = -1;  ?>
									<?php endif ?>
									<?php for ($img = 0; $img <= $upload_photo_no; $img++) : ?>
										<?php if (array_key_exists($img, $upload_photo)) : ?>
											<?php $img_name = "img_$img"; ?>
											<?php $img_id_name = 'img_id_' . $img; ?>
											<div class="col-md-3 col-sm-6 col-xs-12" id="<?= $img_name; ?>">
												<fieldset>
													<div class="input-group mt-5">
														<div class="image-box">
															<?php $curr_image = $main_site_url . '/' . $upload_photo[$img]; ?>
															<img class="rounded w-100 <?= $img_id_name ?>_preview" src="<?= $curr_image; ?>">
														</div>
														<?php if (!$disableEdit) : ?>
															<div class="row">
																<input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control custom-file-input main-image mt-5" id="<?= $img_id_name ?>" name="<?= $img_name; ?>[]">
															</div>
															<div class="mt-1">
																<a onclick="reload();" class="btn btn-sm btn-info waves-effect waves-light text-white fileinput-exists">
																	<i class="fas fa-sync-alt"></i> Reload
																</a>
																<a onclick="deleteImageFile('<?= $img_name ?>');" class="btn btn-sm btn-danger waves-effect waves-light text-white">
																	<i class="fas fa-trash-alt"></i>
																</a>
															</div>
														<?php endif ?>
													</div>
												</fieldset>

											</div>
										<?php endif ?>
									<?php endfor ?>
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
												<?php $checked = (isset($data['tracker']) && $data['tracker'] == $tracker_1) ? 'checked' : ''; ?>
												<input type="radio" <?= $checked; ?> name="tracker" class="form-check-input" value="<?= $tracker_1; ?>">
												<label for="checkbox1">I Acknowledge that this vehicle uploaded has insurer aprroved tracker.</label>
											</div>
											<div class="checkbox mb-1">
												<?php $tracker_2 = "vehicle missing approved tracker"; ?>
												<?php $checked = (isset($data['tracker']) && $data['tracker'] == $tracker_2) ? 'checked' : ''; ?>
												<input type="radio" <?= $checked; ?> name="tracker" class="form-check-input" value="<?= $tracker_2; ?>">
												<label for="checkbox1">I Acknowledge that this vehicle uploaded has no/has none approved tracker.</label>
											</div>
											<span class="error"><?= form_error('tracker'); ?></span>
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
													Update Vehicle
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
