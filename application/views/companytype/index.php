<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Type Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('companytype/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>TypeId</th>
						<th>Name</th>
						<th>Description</th>
						<th>MenuId</th>
						<th>Busrole</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($companytype as $c){ ?>
                    <tr>
						<td><?php echo $c['typeId']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td><?php echo $c['MenuId']; ?></td>
						<td><?php echo $c['busrole']; ?></td>
						<td>
                            <a href="<?php echo site_url('companytype/edit/'.$c['typeId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('companytype/remove/'.$c['typeId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
