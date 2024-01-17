@extends('auth.layouts')

<style>
    body{
    background-image: linear-gradient(#8b67ba, #cdbee1); /* Set your desired background color */
    }

    .card {
        border-width: 5px; /* Adjust the value as needed */
        box-sizing: border-box; /* Include border in the total width and height */
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
            <div class="card-header"><strong>Reservation</strong></div>
            <div class="card-body ">
                <!------content --->
                <form action="{{route('reservation.store')}}" method="POST">
                    @csrf
                    <div class="text-center">
                        <table class="table table-bordered" style="width: 60%; margin: auto;">
                            <thead class="table-primary">
                                <tr>
                                    <th colspan="1">Details</th>
                                    <td></td>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Facility</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select" name="facility" id="facility">
                                        <option selected>choose facility</option>
                                        <option value="1">Facility Futsal</option>
                                        <option value="2">Facility Badminton</option>
                                        <option value="3">Facility BasketBall</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Court</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select" name="court" id="court">
                                        <option selected>choose court no.</option>
                                        <option value="1">Court 1</option>
                                        <option value="2">Court 2</option>
                                        <option value="3">Court 3</option>
                                        <option value="4">Court 4</option>
                                        <option value="5">Court 5</option>
                                        <option value="6">Court 6</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Day</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select" name="day" id="day">
                                        <option selected>choose day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select" name="time" id="time">
                                        <option selected>choose time</option>
                                        <option value="8am-10am">8am - 10am</option>
                                        <option value="10am-12am">10am - 12am</option>
                                        <option value="12pm-2pm">12pm - 2pm</option>
                                        <option value="2pm-4pm">2pm - 4pm</option>
                                        <option value="4pm-6pm">4pm - 6pm</option>
                                        <option value="6pm-8pm">6pm - 8pm</option>
                                        <option value="8pm-10pm">8pm - 10pm</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <input type="submit" class="btn btn-warning" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
