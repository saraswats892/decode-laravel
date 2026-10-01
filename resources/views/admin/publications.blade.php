@extends('admin.layouts.app')

@section('content')

<h2>Admin Publications</h2>

<a href="{{ url('/admin/publicedit/create') }}">Add Publication</a>

<br><br>
<table border="1">

    <tr>
        <th>sr</th>
        <th>Title</th>
        <th>Publish Date</th>
        <th>Image</th>
        <th>Link</th>
        <th>Action</th>
    </tr>

    @foreach($publications as $publication)

        <tr>
            <td>{{ $publication->id }}</td>
            <td>{{ $publication->title }}</td>

            <td>{{ $publication->publish_date }}</td>

            <td>
                @if($publication->image)
                    <img src="{{ asset('storage/'.$publication->image) }}"
                         width="100">
                @endif
            </td>

            <td>
             {{ $publication->link }}
            </td>

            <td>
                <a href="{{ url('/admin/publicedit/edit/'.$publication->id) }}">
                    Edit
                </a>

                |

                <a href="{{ url('/admin/publicedit/delete/'.$publication->id) }}"
                   onclick="return confirm('Are you sure you want to delete this publication?');">
                    Delete
                </a>
            </td>
        </tr>

    @endforeach

</table>
@endsection