<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Location</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<body>
    
    <div class="containe mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success">Here we can see the User Location</h2>
                    </div>
                  
                    <div onclick="showMap({{ $data->latitude }},{{ $data->longitude }})" class = "card-body">
                    
                        <h4>IP Address : {{ $data->ip }}</h4>
                        <h4>Country Name : {{ $data->countryName }}</h4>
                        <h4>Country Code : {{ $data->countryCode }}</h4>
                        <h4>Region Code : {{ $data->regionCode }}</h4>
                        <h4>Region Name : {{ $data->regionName }}</h4>
                        <h4>City Name : {{ $data->cityName }}</h4>
                        <h4>Zipcode : {{ $data->zipCode }}</h4>
                        <h4>Latitude : {{ $data->latitude }}</h4>
                        <h4>Longitude : {{ $data->longitude }}</h4>
                    </div>
                        <div class="card-header">
                            <h2 class="text-success">Google Map</h2>
                        </div> <br>
                            <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-to.org">123 movies</a>
                            <br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <a href="https://www.embedgooglemap.net">google maps widget html</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                            
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
    

            </div>

        </div>
    </div>

    {{-- Map function code start --}}

    <script>
        function showMap(lat,long){
            var coord = {lat:lat, long:long};
        
        new google.maps.Map(
            document.getElementById("map"),
            {
                zoom:10,
                center : coord
            }
        );
    
    }
    showMap(0,0);
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
    async defer></script>
</body>
</html>