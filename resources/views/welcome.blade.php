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
    <h1>Welcome !</h1>
    <h3>Here is the User Location</h3> <br>
    <table class="box mt-3">
    <div style="border:1px solid black; margin-left: 300px; margin-right: 300px;">
        <h3>IP Address : {{ $data->ip }}</h3>
        <h3>Country Name : {{ $data->countryName }}</h3>
        <h3>Country Code : {{ $data->countryCode }}</h3>
        <h3>Region Code : {{ $data->regionCode }}</h3>
        <h3>Region Name : {{ $data->regionName }}</h3>
        <h3>City Name : {{ $data->cityName }}</h3>
        <h3>Zipcode : {{ $data->zipCode }}</h3>
        <h3>Latitude : {{ $data->latitude }}</h3>
        <h3>Longitude : {{ $data->longitude }}</h3>
        </div>
    </table>
</body>
</html>