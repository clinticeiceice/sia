<!DOCTYPE html>
<html>
<head>
    <title>Weather Data Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Weather Data</h1>
        @if(isset($weatherData['error']))
            <div class="alert alert-danger" role="alert">
                {{ $weatherData['error'] }}
            </div>
        @else
            <table class="table">
                <tbody>
                    <tr>
                        <th>City:</th>
                        <td>{{ $weatherData['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Temperature:</th>
                        <td>{{ $weatherData['main']['temp'] }}°C</td>
                    </tr>
                    <tr>
                        <th>Weather:</th>
                        <td>{{ $weatherData['weather'][0]['description'] }}</td>
                    </tr>
                    <tr>
                        <th>Humidity:</th>
                        <td>{{ $weatherData['main']['humidity'] }}</td>
                    </tr>
                    <!-- Add more fields as needed -->
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>

