<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reviews Listing</h3>
            </div>
            <div class="box-body" style="overflow-x: scroll;">
                <table class="table table-striped">
                    <tr>
						<th>Review Id</th>
						<th>Plan Id</th>
						<th>User Id</th>
						<th>Timestamp</th>
						<th>Message</th>
						<th>Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reviews as $r){ ?>
                    <tr>
						<td><?php echo $r['review_id']; ?></td>
						<td><?php echo $r['plan_id']; ?></td>
						<td><?php echo $r['user_id']; ?></td>
						<td><?php echo $r['timestamp']; ?></td>
						<td><?php echo $r['message']; ?></td>
						<td><?php echo $r['name']; ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
