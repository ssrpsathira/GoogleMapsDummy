<!DOCTYPE html>
<html>
    <head>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/jQuery/jquery-1.11.1.js"></script>

        <script>
            window.onload = function () {
                var downloadLocations = 'downloadLocations.php';
                var mapOptions = {
                    //give latitude and long
                    center: new google.maps.LatLng(7.0, 81.0),
                    zoom: 6,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var infoWindow = new google.maps.InfoWindow();
                var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

                var soundLocationArray = $.getJSON(downloadLocations, {
                    service: 'noise',
                    mode: "download",
                    format: "json"
                }).success(function (data) {
                    $.each(data, function (i, item) {
                        console.log(item);
                        //give latitude and long
                        var myLatlng = new google.maps.LatLng(item.latitude, item.longitude);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: item.noise_level
                        });
                    });
                });
            }
        </script>
    </head>

    <body>
        <div id="googleMap" style="width:500px;height:380px;"></div>

    </body>
</html>