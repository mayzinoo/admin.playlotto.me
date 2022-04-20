<div class="module-head">
			<h3>Change Password</h3>
</div>
<div class="module-body">
	<?=form_open('Admin/update_admin')?>
	
		<div class="form-horizontal row-fluid">
		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
			<div class="control-group">
				<label class="control-label" for="basicinput">Old Password</label>
				<div class="controls">
					<input type="password" id="basicinput" name="oldpwd" placeholder="" class="span8">							
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="basicinput">New Password</label>
				<div class="controls">
					<input type="password" id="basicinput" name="newpwd" placeholder="" class="span8">							
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" value="submit" name="submit" class="btn btn-success">Change</button>
				</div>
			</div>
			<!-- <label>Email</label>
			<input type="emial" name="email" class="form-control">
			<label>New Password</label>
			<input type="password" name="newpwd" class="form-control">
			<br/><br/>
			<button type="submit" value="submit" name="submit" class="btn btn-success mobile-button">Change</button> -->
		</div>
	 <?=form_close()?>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mid_top_padding">
    <div class="breadcome-list">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    
		</div>
	   </div>
	</div>
    </div>
</div>
