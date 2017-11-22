<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('company/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CompanyId</th>
						<th>Code</th>
						<th>TypeId</th>
						<th>LobId</th>
						<th>Name</th>
						<th>Description</th>
						<th>MenuId</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($company as $c){ ?>
                    <tr>
						<td><?php echo $c['companyId']; ?></td>
						<td><?php echo $c['code']; ?></td>
						<td><?php echo $c['typeId']; ?></td>
						<td><?php echo $c['lobId']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td><?php echo $c['menuId']; ?></td>
						<td>
                            <a href="<?php echo site_url('company/edit/'.$c['companyId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('company/remove/'.$c['companyId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
