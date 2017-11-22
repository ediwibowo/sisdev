<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Product Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('product/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ProductId</th>
						<th>AddressId</th>
						<th>ProdTypeId</th>
						<th>Name</th>
						<th>PicturePath</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($product as $p){ ?>
                    <tr>
						<td><?php echo $p['productId']; ?></td>
						<td><?php echo $p['addressId']; ?></td>
						<td><?php echo $p['prodTypeId']; ?></td>
						<td><?php echo $p['name']; ?></td>
						<td><?php echo $p['picturePath']; ?></td>
						<td><?php echo $p['Description']; ?></td>
						<td>
                            <a href="<?php echo site_url('product/edit/'.$p['productId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('product/remove/'.$p['productId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
