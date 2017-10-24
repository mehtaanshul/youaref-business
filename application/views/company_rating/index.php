<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Rating Listing</h3>
            </div>
            <div class="box-body" style="overflow-x: scroll;">
                <table class="table table-striped">
                    <tr>
						<th>Rating Id</th>
						<th>User Id</th>
						<th>Company Id</th>
						<th>Rating</th>
						<th>Timestamp</th>
                    </tr>
                    <?php foreach($company_rating as $c){ ?>
                    <tr>
						<td><?php echo $c['rating_id']; ?></td>
						<td><?php echo $c['user_id']; ?></td>
						<td><?php echo $c['company_id']; ?></td>
						<td><?php echo $c['rating']; ?></td>
						<td><?php echo $c['timestamp']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
