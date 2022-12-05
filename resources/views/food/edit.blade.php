@extends('admin.layout')
@section('content')
    <form action="{{ route('foods.update', $food) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name"
                value="{{ $food->name }}">
            @error('name')
                <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price"
                value="{{ $food->price }}">
            @error('price')
                <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Description</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="description"
                value="{{ $food->description }}">
            @error('description')
                <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image"
                value="">
            @error('image')
                <p style="margin-bottom: 15px; color:red">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-3">
            <select name="category_id" class="form-control">
                <option selected>Select a category </option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
