<!DOCTYPE html>
<html>
    <head>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/jQuery/jquery-1.11.1.js"></script>

        <script>
            window.onload = function () {
                var downloadLocations = 'downloadLocations.php';
                var soundLocationArray = $.getJSON(downloadLocations, {
                    service: 'noise',
                    mode: "download",
                    format: "json"
                }).success(function (data) {
                    alert(data.toSource());
                    $.each(data.items, function (i, item) {

                    });
                });
                var mapOptions = {
                    //give latitude and long
                    center: new google.maps.LatLng(7.0, 81.0),
                    zoom: 6,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var infoWindow = new google.maps.InfoWindow();
                var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
                //give latitude and long
                var myLatlng = new google.maps.LatLng(7.0, 81.0);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: "Mumbai"
                });
            }
        </script>
    </head>

    <body>
        <div id="googleMap" style="width:500px;height:380px;"></div>

    </body>
</html>