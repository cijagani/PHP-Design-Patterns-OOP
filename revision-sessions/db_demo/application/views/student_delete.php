
			<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6 jumbotron">
						<form class="form-horizontal" method="post" action="<?php echo site_url('students/delete') ?>">
							<fieldset>

								<!-- Form Name -->
								<legend>Form Name</legend>

								<!-- Text input-->
								<div class="form-group <?php if(form_error('txt_stud_name')) echo 'has-error' ?>">
									<label class="col-sm-4 control-label" for="txt_stud_name">Student Name</label>
									<div class="col-sm-6">
										<input id="txt_stud_name" name="txt_stud_name" type="text" placeholder="Enter Student Name" class="form-control input-md" value="<?php echo $student_info['0']->name; ?>">
									<?php echo form_error('txt_stud_name'); ?>
									</div>
								</div>

								<!-- Text input-->
								<div class="form-group <?php if(form_error('txt_contact')) echo 'has-error' ?>">
									<label class="col-sm-4 control-label" for="txt_contact">Contact</label>
									<div class="col-sm-6">
										<input id="txt_contact" name="txt_contact" type="text" placeholder="Enter Contact No" class="form-control input-md" value="<?php echo $student_info['0']->contact; ?>">
										<?php echo form_error('txt_contact'); ?>
									</div>
								</div>

								<!-- Button -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="btn_add"></label>
									<div class="col-md-4">
										<button id="btn_update" name="btn_update" class="btn btn-info" type="submit" value="update">Update</button>
									</div>
								</div>

							</fieldset>
							<input type="hidden" name="stud_id" value="<?php echo $student_info['0']->id; ?>">
						</form>
					</div>
					<div class="col-md-3">
					</div>
			</div>
	</div>

</body>
</html>