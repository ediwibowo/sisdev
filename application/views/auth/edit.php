<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Auth Edit</h3>
            </div>
			<?php echo form_open('auth/edit/'.$auth['authId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="authName" class="control-label">AuthName</label>
						<div class="form-group">
							<input type="text" name="authName" value="<?php echo ($this->input->post('authName') ? $this->input->post('authName') : $auth['authName']); ?>" class="form-control" id="authName" />
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