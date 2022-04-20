<div class="module-head">
			<h3>Change Lotto Amount</h3>
</div>
<div class="module-body">
<?=form_open('Admin/update_requestlotto')?>
	<input type="hidden" value="<?php echo $this->uri->segment(3); ?>" name="userid">
	<input type="hidden" value="<?php echo $userdata->balance; ?>" name="bal">
	<input type="hidden" value="<?php echo $this->uri->segment(4); ?>" name="id">
	<div class="mid_top_padding">
		<div class="control-group">
				<label class="control-label" for="basicinput">Amount</label>
				<div class="controls">
					<input type="text" id="basicinput" name="lotto_amt" placeholder="" class="span8">							
				</div>
		</div>
		<div class="control-group">
				<div class="controls">
					<button type="submit" value="submit" name="submit" class="btn btn-success">Add</button>
				</div>
		</div>
	</div>
<?=form_close()?>
</div>
