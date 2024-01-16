@extends('auth.layouts')
@section('content')

<style>
    body {
        background-color: lightblue; /* Set your desired background color */
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>Schedule</strong></div>
            <div class="card-body">
                <!-- Display detailed schedule -->
                <h4>Detailed Schedule </h4>
                <br>
                <div class="text-center">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Day</th>
                                <th>Facility</th>
                                <th>Court</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->day }}</td>
                                    <td>{{ $reservation->facility->name }}</td>
                                    <td>{{ $reservation->court->court_no }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td class="{{ $reservation->status == 'reserved' ? 'text-danger' : '' }}">
                                        {{ $reservation->status == 'reserved' ? 'Not Available' : 'Available' }}
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
