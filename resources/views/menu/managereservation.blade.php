@extends('auth.layouts')

<style>
    body{
    background-image: linear-gradient(#8b67ba, #cdbee1); /* Set your desired background color */
    }
</style>
@section('content')
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
        <div class="card">
            <div class="card-header"><strong>Manage Reservation</strong></div>
            <div class="card-body">
                    <h4>Your Reservation</h4>
                    <br>
                    <div class="text-center">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Reservation No.</th>
                                <th>Facility</th>
                                <th>Court</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->facility->name }}</td>
                                    <td>{{ $reservation->court->court_no }}</td>
                                    <td>{{ $reservation->day }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>
                                        <form action="{{ route('managereservation.destroy', $reservation->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Cancel</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
