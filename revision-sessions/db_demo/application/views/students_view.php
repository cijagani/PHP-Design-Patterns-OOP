			<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
						<!-- <select class="form-control">
						<?php //foreach ($students_data as $student) {
								//print_r($student);
								//echo "<option value='$student->id'>$student->name</option>";
							
						//} 
					//	?>
						</select> -->
						<table class="table table-bordered table-condensed table-hover table-responsive">
							<tr>
								<th>NO</th>
								<th>NAME</th>
								<th>CONTACT</th>
								<?php echo $mode; ?>
								<?php if($mode=="edit" || $mode=="delete"){
									echo "<th>action</th>";
								} ?>
							</tr>
							<?php
							$i=1;
							foreach ($students_data as $row) {
								echo "<tr>";
									echo "<td>{$i}</td>";
									echo "<td>{$row->name}</td>";
									echo "<td>{$row->contact}</td>";

									if($mode=="edit"){
										echo "<td> <a href='".site_url('students/edit/').$row->id."' class='btn btn-sm btn-warning'><i class='glyphicon glyphicon-edit'></i> Edit</a></td>";
									}
									if($mode=="delete"){
										echo "<td> <a href='".site_url('students/delete/').$row->id."' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-remove'></i> Delete</a></td>";
									}
									
								echo "</tr>";
								$i++;
							  }  
							?>
						</table>
						
					</div>
					<div class="col-md-3">
					</div>
			</div>
	</div>
		
	</div>
</body>
</html>