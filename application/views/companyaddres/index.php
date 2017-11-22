<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Companyaddress Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('companyaddres/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>AddressId</th>
						<th>CompanyId</th>
						<th>Country</th>
						<th>City</th>
						<th>Addres</th>
						<th>Description</th>
						<th>Lat</th>
						<th>Lon</th>
						<th>MenuId</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($companyaddress as $c){ ?>
                    <tr>
						<td><?php echo $c['addressId']; ?></td>
						<td><?php echo $c['companyId']; ?></td>
						<td><?php echo $c['country']; ?></td>
						<td><?php echo $c['city']; ?></td>
						<td><?php echo $c['addres']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td><?php echo $c['lat']; ?></td>
						<td><?php echo $c['lon']; ?></td>
						<td><?php echo $c['menuId']; ?></td>
						<td>
                            <a href="<?php echo site_url('companyaddres/edit/'.$c['addressId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('companyaddres/remove/'.$c['addressId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
