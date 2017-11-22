<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Producttype Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('producttype/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ProdTypeId</th>
						<th>Name</th>
						<th>Description</th>
						<th>MenuId</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($producttype as $p){ ?>
                    <tr>
						<td><?php echo $p['prodTypeId']; ?></td>
						<td><?php echo $p['name']; ?></td>
						<td><?php echo $p['description']; ?></td>
						<td><?php echo $p['menuId']; ?></td>
						<td>
                            <a href="<?php echo site_url('producttype/edit/'.$p['prodTypeId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('producttype/remove/'.$p['prodTypeId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
