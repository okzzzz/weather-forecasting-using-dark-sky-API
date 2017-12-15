	<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Weekly forecast</h2>
				
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
                       <?php
                  
                  //for setting up 12 hrs predictions
                  $i=0;
                  
                  //weekly forecast
                  foreach($forecast->daily->data as $day):
               $average_temp=(round($day->temperatureHigh)+ round($day->temperatureLow))/2;     
               ?> 
					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2  style="background-color:#149805ba; color:#ffffff;"><?php echo date("l",$day->time) ?></h2>
                            <h3>  <?php echo date("Y-m-d",$day->time) ?></h3>
                            <h2><?php echo get_icon($day->icon);?></h2>
							<div class="price"><?php echo round($average_temp);?><sup class="currency">&#8457;</sup></div>
							<p>About :<?php echo $day->summary;?></p>
							<ul class="classes">
								<li>  High: <?php echo round($day->temperatureHigh)?>&#8457;</li>
								<li class="color">Low: <?php echo round($day->temperatureLow)?>&#8457;</li>
								<li>Humidity: <?php echo $day->humidity*100;?>%</li>
								<li class="color">sunriseTime: <?php echo date("g a",$day->sunriseTime);?></li>
								<li>sunsetTime: <?php echo date("g a",$day->sunsetTime);?></li>
								
							</ul>
							<a href="#" class="btn btn-default">optional</a>
						</div>
					</div>
  <?php 
                      $i++;
                  if($i==8) break;
                      endforeach;
                      ?>
			

			
				</div>
				</div>
			</div>
		</div>