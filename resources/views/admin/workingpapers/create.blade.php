@extends('admin.layouts.app')

@section('content')
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<h2>Add Working Paper</h2>

<form method="POST" action="{{ url('/admin/workingpapers/store') }}" enctype="multipart/form-data">

    @csrf

    <label>Title</label>
    <br>
    <input type="text" name="title">

    <br><br>

    <label>Description</label>
    <br>
    <textarea name="description"></textarea>

    <br><br>

    <label>Image</label>
    <br>
    <input type="file" name="image">

    <br><br>

    <label>PDF</label>
    <br>
    <input type="file" name="pdf">

    <br><br>

    <button type="submit">Save</button>

</form>

@endsection