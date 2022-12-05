@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Admin dashboard</h4>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $users as $user )
                
          
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>Delete</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection