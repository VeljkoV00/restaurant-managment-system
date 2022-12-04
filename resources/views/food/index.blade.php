@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Food menu</h4>
            <a class="btn btn-primary" href="{{ route('foods.create') }}">Add a food</a>
            <p class="card-text">Some example text. Some example text.</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($foods as $food)
                        <tr>
                            <td>
                                <img src="{{ asset($food->image) }}" height="100" alt="">
                            </td>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->price }}$</td>
                            <td>category</td>
                            <td>{{ $food->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
