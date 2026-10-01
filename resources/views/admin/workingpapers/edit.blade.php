@extends('admin.layouts.app')

@section('content')

<h2>Edit Working Paper</h2>

<form method="POST" action="{{ url('/admin/workingpapers/update/'.$working_paper->id) }}" enctype="multipart/form-data">

    @csrf

    <label>Title</label>
    <br>
    <input type="text" name="title" value="{{ $working_paper->title }}">

    <br><br>

    <label>Description</label>
    <br>
    <textarea name="description">{{ $working_paper->description }}</textarea>

    <br><br>

    <label>Image</label>
    <br>

    @if($working_paper->image)
        <img src="{{ asset('storage/'.$working_paper->image) }}" width="150">
        <br><br>
    @endif

    <input type="file" name="image">

    <br><br>

    <label>PDF</label>
    <br>

    @if($working_paper->pdf)
        <a href="{{ asset('storage/'.$working_paper->pdf) }}" target="_blank">
            View Current PDF
        </a>
        <br><br>
    @endif

    <input type="file" name="pdf">

    <br><br>

    <button type="submit">Update</button>

</form>

@endsection