<?php
$opening_hour_lu = array(
    'Monday'    => '16',
    'Tuesday'   => '16',
    'Wednesday' => '16',
    'Thursday'  => '16',
    'Friday'    => '12',
    'Saturday'  => '12',
    'Sunday'    => '12',
);

$opening_minute_lu = array(
    'Monday'    => '00',
    'Tuesday'   => '00',
    'Wednesday' => '00',
    'Thursday'  => '00',
    'Friday'    => '00',
    'Saturday'  => '00',
    'Sunday'    => '00',
);

$closing_hour_lu = array(
    'Monday'    => '2',
    'Tuesday'   => '2',
    'Wednesday' => '2',
    'Thursday'  => '3',
    'Friday'    => '4',
    'Saturday'  => '4',
    'Sunday'    => '1',
);

$closing_minute_lu = array(
    'Monday'    => '30',
    'Tuesday'   => '30',
    'Wednesday' => '30',
    'Thursday'  => '30',
    'Friday'    => '00',
    'Saturday'  => '00',
    'Sunday'    => '30',
);

$day = date("l");
$hour = date("G") + 2;
$minute = date("i");
$ampm = date("a");

print $day . "\n";
print $hour . "\n";
print $minute . "\n";

if ( $ampm == 'am' ) {
    if ( ($hour <= $closing_hour_lu[$day]) && $minute <= $closing_minute_lu[$day] ) {
        print("Store is open");
    }
    else {
        print("Store is closed");
    }
}
else {
    if ( ($hour >= $opening_hour_lu[$day]) && $minute >= $opening_minute_lu[$day] ) {
        print("Store is open");
    }
    else {
        print("Store is closed");
    }
}

//$offset = "14"; // hours diff btwn server and local time
//$melbdate = date("l, d F Y h:i a",time() + ($hourdiff * 3600));
//print ("$melbdate");
?>
