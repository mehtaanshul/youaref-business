<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Likes Listing</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Like Id</th>
						<th>Plan Id</th>
						<th>User Id</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($likes as $l){ ?>
                    <tr>
						<td><?php echo $l['like_id']; ?></td>
						<td><?php echo $l['plan_id']; ?></td>
						<td><?php echo $l['user_id']; ?></td>
						<td><?php echo $l['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('like/edit/'.$l['like_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('like/remove/'.$l['like_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
