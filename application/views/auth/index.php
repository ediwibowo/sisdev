<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Auth Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('auth/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>AuthId</th>
						<th>AuthName</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($auth as $a){ ?>
                    <tr>
						<td><?php echo $a['authId']; ?></td>
						<td><?php echo $a['authName']; ?></td>
						<td>
                            <a href="<?php echo site_url('auth/edit/'.$a['authId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('auth/remove/'.$a['authId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
