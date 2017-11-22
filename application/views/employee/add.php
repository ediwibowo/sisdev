<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Employee Add</h3>
            </div>
            <?php echo form_open('employee/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lastName" class="control-label">LastName</label>
						<div class="form-group">
							<input type="text" name="lastName" value="<?php echo $this->input->post('lastName'); ?>" class="form-control" id="lastName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="firstName" class="control-label">FirstName</label>
						<div class="form-group">
							<input type="text" name="firstName" value="<?php echo $this->input->post('firstName'); ?>" class="form-control" id="firstName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="extension" class="control-label">Extension</label>
						<div class="form-group">
							<input type="text" name="extension" value="<?php echo $this->input->post('extension'); ?>" class="form-control" id="extension" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="officeCode" class="control-label">OfficeCode</label>
						<div class="form-group">
							<input type="text" name="officeCode" value="<?php echo $this->input->post('officeCode'); ?>" class="form-control" id="officeCode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_url" class="control-label">File Url</label>
						<div class="form-group">
							<input type="text" name="file_url" value="<?php echo $this->input->post('file_url'); ?>" class="form-control" id="file_url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jobTitle" class="control-label">JobTitle</label>
						<div class="form-group">
							<input type="text" name="jobTitle" value="<?php echo $this->input->post('jobTitle'); ?>" class="form-control" id="jobTitle" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>