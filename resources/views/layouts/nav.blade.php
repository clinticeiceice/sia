<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8fP5F6F6lLOjzXlOZ/JmZd5gJQ6cB1" crossorigin="anonymous">
    <!-- Include any additional stylesheets or scripts here -->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-c3ZjY1r6eaG46gHI8HXCnJZcPM9K9blzjgZGi/aMXm9mZHpRI2Z9TuZGdA2MQPZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8fP5F6F6lLOjzXlOZ/JmZd5gJQ6cB1" crossorigin="anonymous"></script>

    <!-- Include any additional scripts or footers here -->

</body>
</html>
