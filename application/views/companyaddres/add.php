<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Companyaddres Add</h3>
            </div>
            <?php echo form_open('companyaddres/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="companyId" class="control-label">CompanyId</label>
						<div class="form-group">
							<input type="text" name="companyId" value="<?php echo $this->input->post('companyId'); ?>" class="form-control" id="companyId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo $this->input->post('country'); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="addres" class="control-label">Addres</label>
						<div class="form-group">
							<input type="text" name="addres" value="<?php echo $this->input->post('addres'); ?>" class="form-control" id="addres" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lat" class="control-label">Lat</label>
						<div class="form-group">
							<input type="text" name="lat" value="<?php echo $this->input->post('lat'); ?>" class="form-control" id="lat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lon" class="control-label">Lon</label>
						<div class="form-group">
							<input type="text" name="lon" value="<?php echo $this->input->post('lon'); ?>" class="form-control" id="lon" />
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