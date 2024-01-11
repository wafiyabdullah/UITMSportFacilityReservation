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
    </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5 sticky-top" style="background-color: #8b67ba;">
        <div class="container">
            <a class="navbar-brand mr-auto" style="color:yellow"><strong>UITM Sport Facility Reservation</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
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
                        <a class="nav-link" href="{{route('managereservation.show')}}">Manage Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu.schedule')}}">Schedule</a>
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
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>About Our Teams</strong></div>
            <div class="card-body">
                <p>Our team is a group of 4 students from UiTM Shah Alam. We are currently taking Bachelor of Computer Science (Hons) in Netcentric Computing. This project is for our Back-End (ITT626) subject. We are required to develop a web application using Laravel framework. This web application is for the purpose of reserving sport facilities in UiTM Shah Alam. </p>
                <div class="text-center">
                <p><strong>Our team members are:</strong></p>

                    <p>Devalapar Manager - <span class="text-primary">Ikmal Hakim</span></p>
                    <img src="{{ asset('image/ikmal.jpg') }}" alt="Ikmal" class="img-fluid" style="width: 200px;"><br><br>
                    <p>Devalapar Backend Dev - <span class="text-primary">Abdullah Wafiy</span></p>
                    <img src="{{ asset('image/wafiy.jpg') }}" alt="Wafiy" class="img-fluid" style="width: 200px;"><br><br>
                    <p>Devalapar UI/UX Dev - <span class="text-primary">Muhammad Syamil</span></p>
                    <img src="{{ asset('image/syamil.png') }}" alt="Syamil" class="img-fluid" style="width: 200px;"><br><br>
                    <p>Devalapar UI/UX Dev - <span class="text-primary">Ahmad Lukman</span></p>
                    <img src="{{ asset('image/lukman.png') }}" alt="Lukman" class="img-fluid" style="width: 200px;"><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>© 2024 All Rights Reserved by Devalapar Devs UITM</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>