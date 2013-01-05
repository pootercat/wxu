<?php
$page_name = "location";
include('includes/header.php');
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
window.onload = initialize;

function initialize() {
    var latlng = new google.maps.LatLng(39.1710, -86.5012);
    var myOptions = {
        zoom: 12,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    //create the map
    var map = new google.maps.Map(document.getElementById("google-map"), myOptions);

    // create the marker
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(39.1710, -86.5012),
        map: map,
        title: "WingsXtreme U"
    });

    var contentString =
    '<div style="text-align:left; color:black;">2612 E. 10th St.</div>'+
    '<div style="text-align:left; color:black;">(10th & the Bypass Shopping Plaza)</div>'+
    '<div style="text-align:left; color:black;">(812) 333-9464</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    var deliveryCoordinates = [
        //new google.maps.LatLng(39.1271, -86.5039),
        new google.maps.LatLng(39.1359, -86.4965),
        new google.maps.LatLng(39.1435, -86.4804),
        new google.maps.LatLng(39.1504, -86.4714),
        new google.maps.LatLng(39.1666, -86.4669),//
        new google.maps.LatLng(39.2004, -86.4679),
        new google.maps.LatLng(39.1910, -86.5118),
        new google.maps.LatLng(39.2009, -86.5288),
        new google.maps.LatLng(39.2009, -86.5473),
        new google.maps.LatLng(39.1870, -86.5515),
        new google.maps.LatLng(39.1791, -86.5527),
        new google.maps.LatLng(39.1570, -86.5336),
        new google.maps.LatLng(39.1470, -86.5328),
        new google.maps.LatLng(39.1470, -86.5084),
        new google.maps.LatLng(39.1359, -86.4965)
    ];
    var deliveryPath = new google.maps.Polygon({
        path: deliveryCoordinates,
        strokeColor: "blue",
        strokeOpacity: .7,
        strokeWeight: 2,
        fillColor: "blue",
        fillOpacity: .2
    });
    deliveryPath.setMap(map);
}
</script>

<div id="content">
    <div id="left-column">
        <div id="google-map"></div>
    </div>
    <div id="right-column">
        <div id="small-info">
            <div id="small-info-header">
                <img src="/css/images/store-hours.png" alt="Store Hours">
            </div>
            <div id="small-info-content">
                <ul style="list-style-type:none;">
                    <li>Mon-Wed....4PM - 2:30AM</li>
                    <li>Thursday......4PM - 3:30AM</li>
                    <li>Fri-Sat........Noon - 4:00AM</li>
                    <li>Sunday........Noon - 1:30AM</li>
                </ul>
            </div>
        </div>
        <div id="small-info">
            <div id="small-info-header">
                <img src="/css/images/address.png" alt="Address">
            </div>
            <div id="small-info-content">
                <ul style="list-style-type:none;">
                    <li>2612 E 10th St.</li>
                    <li>(10th & the Bypass Shopping Plaza)</li>
                    <li>Bloomington, IN 47408</li>
                    <li>812-333-WING(9464)</li>
                </ul>
            </div>
        </div>
    </div> <!-- end right column -->
</div> <!-- content -->

<?php
include('includes/footer.php');
?>