<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">My Plan Add</h3>
            </div>
            <?php echo form_open('my_plan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="plan_id" class="control-label">Plan Id</label>
						<div class="form-group">
							<input type="text" name="plan_id" value="<?php echo $this->input->post('plan_id'); ?>" class="form-control" id="plan_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="<?php echo $this->input->post('amount'); ?>" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="company_id" class="control-label">Company Id</label>
						<div class="form-group">
							<input type="text" name="company_id" value="<?php echo $this->input->post('company_id'); ?>" class="form-control" id="company_id" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>