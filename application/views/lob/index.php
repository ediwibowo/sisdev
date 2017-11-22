<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lob Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lob/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LobId</th>
						<th>Name</th>
						<th>Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lob as $l){ ?>
                    <tr>
						<td><?php echo $l['lobId']; ?></td>
						<td><?php echo $l['name']; ?></td>
						<td><?php echo $l['desc']; ?></td>
						<td>
                            <a href="<?php echo site_url('lob/edit/'.$l['lobId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lob/remove/'.$l['lobId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
