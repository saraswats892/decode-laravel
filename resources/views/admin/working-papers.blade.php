@extends('admin.layouts.app')

@section('content')

<h2>Admin Working Papers</h2>

<a href="{{ url('/admin/workingpapers/create') }}">Add Working Paper</a>

<br><br>

<table border="1">

    <tr>
        <th>Title</th>
        <th>Description</th>
          <th>Image</th>
            <th>Pdf</th>
        <th>Action</th>
    </tr>

    @foreach($working_papers as $working_paper)

        <tr>
            <td>{{ $working_paper->title }}</td>

            <td>{{ $working_paper->description }}</td>
            <td>
                @if($working_paper->image)
                    <img src="{{ asset('storage/'.$working_paper->image) }}"
                         width="100">
                @else
                    No Image
                @endif
            </td>
            <td>
                @if($working_paper->pdf)
                    <a href="{{ asset('storage/'.$working_paper->pdf) }}"
                       target="_blank">
                        View PDF
                    </a>
                @else
                    Coming Soon
                @endif
            </td>

            <td>
                <a href="{{ url('/admin/workingpapers/edit/'.$working_paper->id) }}">
                    Edit
                </a>
                |

                <a href="{{ url('/admin/workingpapers/delete/'.$working_paper->id) }}"
                   onclick="return confirm('Are you sure you want to delete this working paper?');">
                    Delete
                </a>
            </td>
        </tr>

    @endforeach

</table>

<br>

{{ $working_papers->links() }}

@endsection