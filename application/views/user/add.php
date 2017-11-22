<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userName" class="control-label">UserName</label>
						<div class="form-group">
							<input type="text" name="userName" value="<?php echo $this->input->post('userName'); ?>" class="form-control" id="userName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lastLogin" class="control-label">LastLogin</label>
						<div class="form-group">
							<input type="text" name="lastLogin" value="<?php echo $this->input->post('lastLogin'); ?>" class="has-datetimepicker form-control" id="lastLogin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="authId" class="control-label">AuthId</label>
						<div class="form-group">
							<input type="text" name="authId" value="<?php echo $this->input->post('authId'); ?>" class="form-control" id="authId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lockCount" class="control-label">LockCount</label>
						<div class="form-group">
							<input type="text" name="lockCount" value="<?php echo $this->input->post('lockCount'); ?>" class="form-control" id="lockCount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="locked" class="control-label">Locked</label>
						<div class="form-group">
							<input type="text" name="locked" value="<?php echo $this->input->post('locked'); ?>" class="form-control" id="locked" />
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