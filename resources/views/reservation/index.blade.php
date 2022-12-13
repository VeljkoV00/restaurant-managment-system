@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reservations menu</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Accept reservation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->status }}</td>
                            <td>
                                <form action="{{ route('reservation.update', $reservation) }}" method="POST" id="form">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-primary" id="btn">Accept reservation</button>

                                </form>


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#form").submit(function(e) {

                //stop submitting the form to see the disabled button effect
                e.preventDefault();

                //disable the submit button
                $("#btn").attr("disabled", true);

                //disable a normal button
               

                return true;

            });


        });
    </script>
@endsection
