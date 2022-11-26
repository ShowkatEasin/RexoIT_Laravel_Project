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
                  
                    <div class = "card-body">
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
                        </div><br>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14607.663588536767!2d90.4393024!3d23.75037835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1669467118039!5m2!1sen!2sbd" width="600" height="450" style="border:0;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

                        <script>
                            function showPosition(position) {
                              x.innerHTML = "Latitude: " + position.coords.latitude +
                              "<br>Longitude: " + position.coords.longitude;
                            }
                        </script>

                    </iframe>
  
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
    

            </div>

        </div>
    </div>

   
   

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>
</html>