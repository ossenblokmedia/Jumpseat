<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
		        <div class="box-header with-border">
		            <h3 class="box-title">Jumpseat</h3>
		        </div>
		        <div class="box-body">
		            <b>Current Location: </b><?php echo $jumpseatdep; ?>
                    <div class="form-group">
                    	<form method="post" id="jumpseat" action="<?php echo url('/jumpseat/fly'); ?>">
							<div class="row">
								<div class="col-xs-6">
									<label>Destination</label>
									<select id="destination" name="dest" class="form-control">
										<option selected disabled>Select a airport</option>
										<?php
											foreach($airports as $airport)
											{
												echo '<option price="'.round(OperationsData::getAirportDistance($jumpseatdep, $airport->icao)*$modifier).'"  value="'.$airport->icao.'">'.$airport->icao.' ('.$airport->name.')</option>';
											}
										?>
									</select>
								</div>
								<div class="col-xs-6">
										<label>Price</label>
									<div class="input-group">
										<input type="text" id="price" name="price" class="form-control" readonly>
										<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
									</div>
								</div>
				             </div>
							<input type="hidden" name="departfrom" value="<?php echo $jumpseatdep; ?>" >
							<input type="hidden" name="pilot" value="<?php echo Auth::$userinfo->pilotid; ?>" >
							<input type="hidden" name="balance" value="<?php echo Auth::$userinfo->totalpay; ?>" >
							<input type="hidden" name="action" value="fly" >
						</form>

                    </div> 
		        </div>
		        <div class="box-footer">
                	<button type="submit" class="btn btn-primary" form="jumpseat">Fly!</button>
              	</div>
		    </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('select').on('change', function() {
	  $('#price').val($('option:selected', this).attr('price'));
	})
</script>
