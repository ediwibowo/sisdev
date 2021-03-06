<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Product Edit</h3>
            </div>
			<?php echo form_open('product/edit/'.$product['productId']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="addressId" class="control-label">AddressId</label>
						<div class="form-group">
							<input type="text" name="addressId" value="<?php echo ($this->input->post('addressId') ? $this->input->post('addressId') : $product['addressId']); ?>" class="form-control" id="addressId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="prodTypeId" class="control-label">ProdTypeId</label>
						<div class="form-group">
							<input type="text" name="prodTypeId" value="<?php echo ($this->input->post('prodTypeId') ? $this->input->post('prodTypeId') : $product['prodTypeId']); ?>" class="form-control" id="prodTypeId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $product['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="picturePath" class="control-label">PicturePath</label>
						<div class="form-group">
							<input type="text" name="picturePath" value="<?php echo ($this->input->post('picturePath') ? $this->input->post('picturePath') : $product['picturePath']); ?>" class="form-control" id="picturePath" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="Description" value="<?php echo ($this->input->post('Description') ? $this->input->post('Description') : $product['Description']); ?>" class="form-control" id="Description" />
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