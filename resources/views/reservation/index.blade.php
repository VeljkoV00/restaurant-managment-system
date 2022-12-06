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
                    @foreach ($reservations as $reservation )
                        
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->status }}</td>
                        <td>
                            <form action="{{ route('reservation.update', $reservation) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <button class="btn btn-primary">Accept reservation</button>

                            </form>
                            
                        
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
