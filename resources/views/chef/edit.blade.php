@extends('admin.layout')
@section('content')

<form action="{{ route('chefs.update',  $chef) }}" method="POST" enctype="multipart/form-data">
@method('PUT')   
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $chef->name }}">
      @error('name')
      <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
  @enderror
     
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Image</label>
       <input type="file" class="form-control" name="image" id="image">
       @error('image')
       <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
   @enderror
       
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection