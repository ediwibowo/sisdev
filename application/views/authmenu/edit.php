<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Authmenu Edit</h3>
            </div>
			<?php echo form_open('authmenu/edit/'.$authmenu['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="authid" class="control-label">Authid</label>
						<div class="form-group">
							<input type="text" name="authid" value="<?php echo ($this->input->post('authid') ? $this->input->post('authid') : $authmenu['authid']); ?>" class="form-control" id="authid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="authmenu" class="control-label">Authmenu</label>
						<div class="form-group">
							<input type="text" name="authmenu" value="<?php echo ($this->input->post('authmenu') ? $this->input->post('authmenu') : $authmenu['authmenu']); ?>" class="form-control" id="authmenu" />
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