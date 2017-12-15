		<!-- end:fh5co-hero -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Hourly forecast</h2>
							
						</div>
					</div>
				</div>
				<div class="row animate-box">
				
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="sunday">
<!-- hour card --> <?php
                  
                  //for setting up 12 hrs predictions
                  $i=0;
                  
                  //hourly forecast
                  foreach($forecast->hourly->data as $hour):
                      ?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<h2><?php echo get_icon($forecast->hourly->icon); ?></h2>
										 	<h2><?php echo date("g a",$hour->time) ?></h2>
										<h3><?php echo celcius($hour->temperature);?> &deg;<abbr title="Celcius">C</abbr> </h3>
                                        <h3>Humidity: <?php echo $hour->humidity*100;?>%</h3>
                                        <h3>Summary: <?php echo $hour->summary;?></h3>
									</div>
								</div>
                                <!-- hour card ends -->
						                  <?php 
                      $i++;
                  if($i==12) break;
                      endforeach;
                      ?>
							</div>
							<!-- END sched-content -->

						

							
						
						</div>
                    </div>
				</div>
			</div>
		</div>