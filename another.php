<?php
date_default_timezone_set("Africa/Lagos");
$timezone = date_default_timezone_get();

echo $timezone . "<br>";
$date = Date("M-y-l:h-i-s", (time() + (60 * 60 * 24)));
$hour = 13;
$min  = 30;
$sec  = 45;
$mon  = 8;
$days = 12;
$year = 2025;

if (isset($_GET['hour'])) {
    $hour = 12 + (int) $_GET['hour'];
}
if (isset($_GET['min'])) {
    $min = (int) $_GET['min'];
}
if (isset($_GET['sec'])) {
    $sec = (int) $_GET['sec'];
}



$timestamp = mktime($hour, $min, $sec, $mon, $days, $year);
$date = Date("M-y-l:h-i-s", $timestamp);
echo $date;

#CHEAT Code formating time using..
#CRON JOBS
#Y - full year - 2025
#y - for abbr Year - 25
#m - for abbr Month - 02
#M - for abbr Month Name - Feb
#d - for abbr Month Day - 02
#D - for abbr week Day FRI
#h - hour format 12 Hour format
#H - 24 hours format
#i - minutes format
#s - seconds format
#a - am or pm
#j - just the same as [d]
#l - for Lowercase full representation of week days 

var_dump($_SERVER);
?>


<form action="<?= $_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data">
    <label for="hour">Enter your Hour</label>
    <input type="text" name="hour" id="" />
    <button type="submit">Submit</button>
</form>