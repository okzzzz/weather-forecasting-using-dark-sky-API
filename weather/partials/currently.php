<?php echo get_dp($forecast->currently->icon); ?>
		
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
							<div id="fh5co-contact">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-12 animate-box">
                            <header><H1 style="color:#ffffff;">Current forecasting for <?php echo $result;?></H1></header>
                                 	<div class="col-md-3 col-md-offset-0">
									  <h1 style="font-size: 12em;"><?php echo get_icon($forecast->currently->icon); ?></h1>
                                    </div>
                            <div class="col-md-2 col-md-offset-0">
                                <h1 class="section-title" style="font-size: 4em;"><?php echo celcius($temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h1>
                                  <h1 class="section-title"><?php echo $forecast->currently->temperature; ?>&deg;<abbr title="Farenheit">F</abbr></h1>
                            </div>
                            
                            	<div class="col-md-2 col-md-offset-0"><br>
                                    <h4><?php echo date("l",$time_current) ?> <?php echo date("Y-m-d",$time_current) ?></h4>
                                    <h4>humidity: <?php echo $humidity_current; ?>% </h4>
                                    <h4>windspeed: <?php echo $windspeed_current; ?><abbr titile="Miles per hour"> MPH</abbr> </h4>
                                </div>
                            
                            	<div class="col-md-2 col-md-offset-0"><br>
                                    <h4>uvIndex: <?php echo $forecast->currently->uvIndex; ?></h4>
                                    <h4>dewPoint: <?php echo $forecast->currently->dewPoint; ?> </h4>
                                    <h4>cloudCover: <?php echo $forecast->currently->cloudCover; ?></h4>
                                </div>
                            
                            	<div class="col-md-2 col-md-offset-0"><br>
                                    <h4  style="background-color:#149805ba; color:#ffffff;">ozone: <?php echo $forecast->currently->ozone; ?></h4>
                                    <h4 >visibility: <?php // echo $forecast->currently->visibility; ?> </h4>
                                    <h4  style="background-color:#149805ba; color:#ffffff;">windBearing: <?php echo $forecast->currently->windBearing; ?></h4>
                                </div>
                              <div class="col-md-8 col-md-offset-1">
							<ul class="contact-info">
                                <li><h2 style="background-color:#149805ba; color:#ffffff;">Current weather status: <?php echo $summary_current; ?> </h2>
                                     
								
							</ul>
                            </div>
                            
						</div>
					
                        
                        
                        
                        
					</div>
				</form>
			</div>
		</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
            