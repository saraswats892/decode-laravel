@extends('admin.layouts.app')

@section('content')

<h2>Add Advocacy in Action</h2>

<form action="{{ url('/admin/advocacy-in-actions/store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div>
        <label>Title</label><br>
        <input type="text" name="title" required>
    </div>

    <br>

    <div>
        <label>Description</label><br>
        <textarea name="description" rows="6" required></textarea>
    </div>

    <br>

    <div>
        <label>Image</label><br>
        <input type="file" name="image" accept="image/*">
    </div>

    <br>

    <div>
        <label>Link</label><br>
        <input type="text" name="link" required>
    </div>

    <br>

    <button type="submit">Save</button>

</form>

<br>

<a href="{{ url('/admin/advocacy-in-actions') }}">Back</a>

@endsection