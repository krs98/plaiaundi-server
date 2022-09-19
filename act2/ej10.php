<?php

include "println.php";

$fdate = fn($offset = null) => date("Y-m-d H:i:s", $offset);

$now = $fdate();
$date = $fdate(strtotime('+1 day +1 hour +1 second'));

$time_left = strtotime($date) - strtotime($now);
$days = floor($time_left / 86400);
$hours = floor($time_left / 3600 % 24);
$minutes = floor($time_left / 60 % 60);
$seconds = $time_left % 60;

println($days . "d " . $hours . "h " . $minutes . "m " . $seconds . "s");

?>
