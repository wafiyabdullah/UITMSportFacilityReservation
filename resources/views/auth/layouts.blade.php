<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UITM Sport Facilities Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">
    <style>
        .navbar-light .navbar-nav .nav-link {
            color: white;
            font-weight: bold; 
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #402662;
            
        }
        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        footer {
            background-color: #8b67ba;
            color: white;
            padding: 0; 
            text-align: center;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #8b67ba;">
        <div class="container">
            <a href="{{route('about')}}" class="navbar-brand mr-auto" style="color:yellow"><strong>UITM Sport Facility Reservation</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reservation')}}">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu.schedule')}}">Schedule</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('managereservation.show')}}">Manage Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>© 2024 All Rights Reserved by <a href="{{route('about')}}" style="color: #020024;">Devalapar Devs UITM</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>