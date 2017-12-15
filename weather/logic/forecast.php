<?php

//google api

 if(isset($_POST['location'])){
$location= htmlentities($_POST['location']);
$location= str_replace(' ','+',$location);
     //google api
$geocode_url= 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=paste your key here';
$location_data= json_decode(file_get_contents($geocode_url));
 
$coordinates=$location_data->results[0]->geometry->location;
$coordinates=$coordinates->lat.','.$coordinates->lng;
$result=$location_data->results[0]->address_components[0]->long_name;
     
 //dark sky api- login and get your key
$api_url='https://api.darksky.net/forecast/paste your key here/'.$coordinates;    
 $forecast=json_decode(file_get_contents($api_url));

//echo '<pre>';
// print_r($forecast); 
//echo '</pre>';
//current conditions
$temperature_current=round($forecast->currently->temperature);
 $time_current= $forecast->currently->time;   

$summary_current=$forecast->currently->summary;
$windspeed_current=round($forecast->currently->windSpeed);
$humidity_current=$forecast->currently->humidity*100;
//set time zone

date_default_timezone_set($forecast->timezone);
 }



function celcius($temp)
{
    return round(($temp-32)*.5556);
}

function fahrenhiet($temp)
{
    return round($temp*1.8+32);
}



//set your background image for partials/currently.php
function get_dp($icon)
{
    if($icon==='clear-day')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/sunny.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }

    elseif($icon==='clear-night')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/nighty.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }

 elseif($icon==='rain')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/rainy1.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='snow')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/snowy.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='sleet')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/sleet.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='wind')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/wind.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='fog')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/fog.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='cloudy')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/test2.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='partly-cloudy-day')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/pcloud.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
 elseif($icon==='partly-cloudy-night')
    {
$the_icon='<div class="fh5co-parallax" style="background-image: url(images/pnight.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
    }
else
{

    $the_icon='<div class="fh5co-parallax" style="background-image: url(images/sunny.jpg);" data-stellar-background-ratio="0.7">';
return $the_icon;
}

}

function get_icon($icon)
{
    if($icon==='clear-day')
    {
$the_icon='<i class="wi wi-day-sunny"></i>';
return $the_icon;
    }

    elseif($icon==='clear-night')
    {
$the_icon='<i class="wi wi-night-clear"></i>';
return $the_icon;
    }

 elseif($icon==='rain')
    {
$the_icon='<i class="wi wi-rain"></i>';
return $the_icon;
    }
 elseif($icon==='snow')
    {
$the_icon='<i class="wi wi-snow"></i>';
return $the_icon;
    }
 elseif($icon==='sleet')
    {
$the_icon='<i class="wi wi-sleet"></i>';
return $the_icon;
    }
 elseif($icon==='wind')
    {
$the_icon='<i class="wi wi-strong-wind"></i>';
return $the_icon;
    }
 elseif($icon==='fog')
    {
$the_icon='<i class="wi wi-fog"></i>';
return $the_icon;
    }
 elseif($icon==='cloudy')
    {
$the_icon='<i class="wi wi-cloudy"></i>';
return $the_icon;
    }
 elseif($icon==='partly-cloudy-day')
    {
$the_icon='<i class="wi wi-day-sunny-overcast"></i>';
return $the_icon;
    }
 elseif($icon==='partly-cloudy-night')
    {
$the_icon='<i class="wi wi-night-partly-cloudy"></i>';
return $the_icon;
    }
else
{

    $the_icon='<i class="wi wi-thermometer"></i>';
return $the_icon;
}

}

?>

