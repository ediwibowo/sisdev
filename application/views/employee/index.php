<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Employees Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('employee/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>EmployeeNumber</th>
						<th>LastName</th>
						<th>FirstName</th>
						<th>Extension</th>
						<th>Email</th>
						<th>OfficeCode</th>
						<th>File Url</th>
						<th>JobTitle</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($employees as $e){ ?>
                    <tr>
						<td><?php echo $e['employeeNumber']; ?></td>
						<td><?php echo $e['lastName']; ?></td>
						<td><?php echo $e['firstName']; ?></td>
						<td><?php echo $e['extension']; ?></td>
						<td><?php echo $e['email']; ?></td>
						<td><?php echo $e['officeCode']; ?></td>
						<td><?php echo $e['file_url']; ?></td>
						<td><?php echo $e['jobTitle']; ?></td>
						<td>
                            <a href="<?php echo site_url('employee/edit/'.$e['employeeNumber']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('employee/remove/'.$e['employeeNumber']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
