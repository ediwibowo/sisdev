<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Companyaddres Edit</h3>
            </div>
			<?php echo form_open('companyaddres/edit/'.$companyaddres['addressId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="companyId" class="control-label">CompanyId</label>
						<div class="form-group">
							<input type="text" name="companyId" value="<?php echo ($this->input->post('companyId') ? $this->input->post('companyId') : $companyaddres['companyId']); ?>" class="form-control" id="companyId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $companyaddres['country']); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $companyaddres['city']); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="addres" class="control-label">Addres</label>
						<div class="form-group">
							<input type="text" name="addres" value="<?php echo ($this->input->post('addres') ? $this->input->post('addres') : $companyaddres['addres']); ?>" class="form-control" id="addres" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $companyaddres['description']); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lat" class="control-label">Lat</label>
						<div class="form-group">
							<input type="text" name="lat" value="<?php echo ($this->input->post('lat') ? $this->input->post('lat') : $companyaddres['lat']); ?>" class="form-control" id="lat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lon" class="control-label">Lon</label>
						<div class="form-group">
							<input type="text" name="lon" value="<?php echo ($this->input->post('lon') ? $this->input->post('lon') : $companyaddres['lon']); ?>" class="form-control" id="lon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="menuId" class="control-label">MenuId</label>
						<div class="form-group">
							<input type="text" name="menuId" value="<?php echo ($this->input->post('menuId') ? $this->input->post('menuId') : $companyaddres['menuId']); ?>" class="form-control" id="menuId" />
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