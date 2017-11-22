



<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('home/search'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
                    <tr>
						<th>UserId</th>
						<th>Password</th>
						<th>UserName</th>
						<th>LastLogin</th>
						<th>AuthId</th>
						<th>Email</th>
						<th>LockCount</th>
						<th>Locked</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['userId']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['userName']; ?></td>
						<td><?php echo $u['lastLogin']; ?></td>
						<td><?php echo $u['authId']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['lockCount']; ?></td>
						<td><?php echo $u['locked']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['userId']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['userId']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                           
        </div>
    </div>
</div>
