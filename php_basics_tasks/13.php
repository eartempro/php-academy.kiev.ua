<?php 
// set vars
$s = 60; // distance of moving in kilometres
// time i hours
$t = 1; // time of moving in hours

// 
$speed_km_per_h = $s / $t;
$speed_m_per_s = $speed_km_per_h * 2.777777778;// km/h ==> (1000 * m) / (3600 * s) => 0.27777778(m/s)
echo "Speed in Km/h " .$speed_km_per_h;
echo " ";
// время движения в часах
echo "Speed in m/s " . $speed_m_per_s;
