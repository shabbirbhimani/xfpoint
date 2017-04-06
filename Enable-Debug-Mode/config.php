<?php
//* Do NOT include the opening php tag above. Copy the code shown below.

// Add here your ip.
$debug_ips = array('202.71.5.115');

//For multiple IPs Use this
//$debug_ips = array('202.71.5.115','SOME.OTHER.IP'); 

if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

if(in_array($ip_address, $debug_ips))
    $config['debug'] = true;