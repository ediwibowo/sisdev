<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Company Add</h3>
            </div>
            <?php echo form_open('company/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="code" class="control-label">Code</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo $this->input->post('code'); ?>" class="form-control" id="code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="typeId" class="control-label">TypeId</label>
						<div class="form-group">
							<input type="text" name="typeId" value="<?php echo $this->input->post('typeId'); ?>" class="form-control" id="typeId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lobId" class="control-label">LobId</label>
						<div class="form-group">
							<input type="text" name="lobId" value="<?php echo $this->input->post('lobId'); ?>" class="form-control" id="lobId" />
						</div>
					</div>
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
						<label for="menuId" class="control-label">MenuId</label>
						<div class="form-group">
							<input type="text" name="menuId" value="<?php echo $this->input->post('menuId'); ?>" class="form-control" id="menuId" />
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