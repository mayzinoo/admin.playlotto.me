<div class="module-head">
		<h3>Lotto Setting</h3>
</div>
<div class="module-body">
	<table class="table">
					<thead>
							<tr>
							  <th>#</th>
							  <th>Ticket Fee</th>
							  <th>Win Payrate</th>
							  <th>Play Payrate</th>
							  <th>Jackpot Payrate</th>							  
							<th>Game Duration</th>
						
							</tr>
					</thead>
					<tbody>
							<?php 
								$i=1;
								foreach($lottodata->result() as $row): ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row->ticket_fee; ?></td>
									<td><?php echo $row->win_payrate; ?></td>
									<td><?php echo $row->play_payrate; ?></td>
									<td><?php echo $row->jackpot_payrate; ?></td>
									<td><?php echo $row->game_duration; ?></td>
									
								</tr>
							<?php 
								$i++;
								endforeach;
							?>
					</tbody>
	</table>
</div>
<div class="module-head toppadding_sm">
		<h3>Change Lotto Setting</h3>
</div>
<div class="module-body">
		<!-- <form class="form-horizontal row-fluid"> -->
		<?=form_open('Admin/update_lottosetting')?>
		<div class="form-horizontal row-fluid">
					<div class="control-group">
						<label class="control-label" for="basicinput">Ticket Fee</label>
						<div class="controls">
							<input type="text" id="basicinput" name="ticketfee" class="span8" value="<?php echo $lotto->ticket_fee; ?>">							
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Win Pay Rate</label>
						<div class="controls">
							<input type="text" id="basicinput" name="winpayrate" class="span8" value="<?php echo $lotto->win_payrate; ?>">							
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Play Pay Rate</label>
						<div class="controls">
							<input type="text" id="basicinput" name="playpayrate" class="span8" value="<?php echo $lotto->play_payrate; ?>">							
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Jackpot Pay Rate</label>
						<div class="controls">
							<input type="text" id="basicinput" name="jackpayrate" class="span8" value="<?php echo $lotto->jackpot_payrate; ?>">							
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="basicinput">Game Duration (Minutes)</label>
						<div class="controls">
							<input type="text" id="basicinput" name="gameduration" class="span8" value="<?php echo $lotto->game_duration; ?>">							
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success">Update Setting</button>
						</div>
					</div>
		</div>
		<?=form_close()?>
		<!-- </form> -->

</div>
