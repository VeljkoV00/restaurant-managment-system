@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Chefs </h4>
            <a class="btn btn-primary" href="{{ route('chefs.create') }}">Add a Chef</a>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Manage</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($chefs as $chef)
                        <tr>
                            <td>
                                <img src="{{ asset($chef->image) }}" height="100" alt="">
                            </td>
                            <td>{{ $chef->name }}</td>
                            <td>
                                <a href="{{ route('chefs.edit', $chef) }}" class="btn btn-dark">Edit</a>
                                <form action="{{ route('chefs.destroy', $chef) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button  type="submit" class="btn btn-danger ml-2 pr-2">Delete a chef</button>
                                </form>
                              
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
