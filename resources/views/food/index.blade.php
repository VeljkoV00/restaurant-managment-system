@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Food menu</h4>
            <a class="btn btn-primary" href="{{ route('foods.create') }}">Add a food</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Manage</th>
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
                            <td>Category</td>
                            <td>{{ $food->description }}</td>     
                            <td>
                                <a href="{{ route('foods.edit', $food) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('foods.destroy', $food) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
