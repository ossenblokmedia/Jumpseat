<?php if (!defined('JUMPSEAT_MODIFIER') || JUMPSEAT_MODIFIER == '') { ?>
<div class="pad margint">
  <div class="callout callout-warning" style="margin-bottom: 0!important;">
    <h4><i class="fa fa-warning"></i> Warning:</h4>
    JUMPSEAT_MODIFIER is not set in local.config.php, default value will be used (0.5)
  </div>
</div>
<?php } ?>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
		        <div class="box-header with-border">
		            <h3 class="box-title">Jumpseat</h3>
		        </div>
		        <div class="box-body">
		            <b>Current Location:</b>
		                        <hr>
		                        <P>Cost per Jumpseat Mile: $0.50</P><hr>
		                         <p>Select your destination:</p>
		                    <div class="form-group">
		                    	<form method="post" id="jumpseat" action="<?php echo url('/jumpseat/fly'); ?>">
			                        <select id="jumpseatdest" name="jumpseatdest" class="form-control">
										<option value="">Select All</option>
										<?php
										foreach($airports as $airport)
										{
										echo '<option value="'.$airport->icao.'">'.$airport->icao.' ('.$airport->name.') - Miles: '.round(OperationsData::getAirportDistance($jumpseatdep, $airport->icao)).' - Price: $'.round(OperationsData::getAirportDistance($jumpseatdep, $airport->icao)*0.5).'</option>';
										}
										?>
									</select>
									<input type="hidden" name="departfrom" value="<?php echo $jumpseatdep; ?>" >
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
