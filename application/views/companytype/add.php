<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Companytype Add</h3>
            </div>
            <?php echo form_open('companytype/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MenuId" class="control-label">MenuId</label>
						<div class="form-group">
							<input type="text" name="MenuId" value="<?php echo $this->input->post('MenuId'); ?>" class="form-control" id="MenuId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="busrole" class="control-label">Busrole</label>
						<div class="form-group">
							<input type="text" name="busrole" value="<?php echo $this->input->post('busrole'); ?>" class="form-control" id="busrole" />
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