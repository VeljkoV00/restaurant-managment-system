@extends('admin.layout')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <a class="btn btn-primary" href="{{ route('categories.create') }}">Create a category</a>
      <p class="card-text">Some example text. Some example text.</p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>       
          </tr>
        </thead>
        <tbody>
           @foreach ($categories as $category )
          <tr>
            <td>{{ $category->name }}</td>  
            <td><a href="{{ route('categories.edit', $category) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="sumbit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection