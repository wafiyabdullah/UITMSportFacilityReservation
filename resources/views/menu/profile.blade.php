@extends('auth.layouts')
@section('content')

<style>
    body{
    background-image: linear-gradient(#8b67ba, #cdbee1); /* Set your desired background color */
    }

    .card {
        border-width: 3px; /* Adjust the value as needed */
    }
</style>
<div class="row justify-content-center">
    <div class="col-md-8">
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card mb-3">
            <div class="card-header"><strong>Profile</strong></div>
            <div class="card-body">
            @foreach($profile as $user)
                <form action="{{route('editProfile')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4>Profile Information</h4>
                        <h6 class="text-secondary">Update your account's profile information and email address.</h6><br>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->studentname }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->studentemail }}" disabled>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Update Password</h4>
                        <h6 class="text-secondary">Ensure your account is using a long, random password to stay secure.</h6><br>
                        <div class="mb-3">
                            <label for="name" class="form-label">Existing Password</label>
                            <input type="password" name="existingpassword" id="existingpassword" class="form-control" placeholder="Enter existing password">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password" required minlength="6">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm new password" required minlength="6">
                        </div><br>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </form>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection 
