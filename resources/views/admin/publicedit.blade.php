@extends('admin.layouts.app')

@section('content')

<h2>Publication</h2>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST"
      action="{{ isset($publication) ? url('/admin/publicedit/update/' . $publication->id) : url('/admin/publicedit/store') }}"
      enctype="multipart/form-data">


@csrf
    <label>Title</label>
    <input type="text" name="title" value="{{ $publication->title ?? '' }}">

    <br><br>

    <label>Publish Date</label>
    <input type="date" name="publish_date" value="{{ $publication->publish_date ?? '' }}">

    <br><br>

    <label>Image</label>
    @if(isset($publication) && $publication->image)
    <img src="{{ asset('storage/' . $publication->image) }}" width="100">
@endif
    <input type="file" name="image">

    <br><br>

    <label>Link</label>
    <input type="text" name="link" value="{{ $publication->link ?? '' }}">

    <br><br>

    <button type="submit">Save</button>

</form>

@endsection