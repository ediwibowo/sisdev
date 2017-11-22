<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Authmenu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('authmenu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Authid</th>
						<th>Authmenu</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($authmenu as $a){ ?>
                    <tr>
						<td><?php echo $a['authid']; ?></td>
						<td><?php echo $a['authmenu']; ?></td>
						<td>
                            <a href="<?php echo site_url('authmenu/edit/'.$a['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('authmenu/remove/'.$a['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
