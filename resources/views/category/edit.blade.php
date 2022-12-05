@extends('admin.layout')
@section('content')

<form action="{{ route('categories.update', $category) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$category->name }}">
      @error('name')
      <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
  @enderror
     
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection