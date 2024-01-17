@extends('auth.layouts')
@section('content')

<style>
    body {
        background-image: url('image/uitm.jpg');
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat;
    }

    .card {
        border-width: 3px; /* Adjust the value as needed */
        box-sizing: border-box; /* Include border in the total width and height */
    }

    .text-danger{
        font-weight: bold;
    }
</style>

<div class="text-center">
    <h6 class="text-danger">Only UITM student account will be validate <span class="badge bg-danger">Reminder</span></h6><br>
</div>
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Student Name" id="studentname" class="form-control" name="studentname"
                                    required autofocus>
                                @if ($errors->has('studentname'))
                                <span class="text-danger">{{ $errors->first('studentname') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Student Email" id="email_address" class="form-control"
                                    name="studentemail" required autofocus>
                                @if ($errors->has('studentemail'))
                                <span class="text-danger">{{ $errors->first('studentemail') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection