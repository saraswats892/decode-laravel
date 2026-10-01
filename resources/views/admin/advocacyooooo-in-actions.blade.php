@extends('admin.layouts.app')

@section('content')

<h2>Admin Advocacy in Action</h2>

<a href="{{ url('/admin/advocacy-in-actions/create') }}">Add Advocacy</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Link</th>
        <th>Action</th>
    </tr>

    @foreach($advocacies as $advocacy)

    <tr>

        <td>{{ $advocacy->id }}</td>

        <td>{{ $advocacy->title }}</td>

        <td>{{ $advocacy->description }}</td>

        <td>
            @if($advocacy->image)
                <img src="{{ asset('storage/' . $advocacy->image) }}" width="100">
            @else
                No Image
            @endif
        </td>

        <td>
            {{ $advocacy->link }}
        </td>

        <td>
            <a href="{{ url('/admin/advocacy-in-actions/edit/' . $advocacy->id) }}">
                Edit
            </a>

            |

            <form action="{{ url('/admin/advocacy-in-actions/delete/' . $advocacy->id) }}"
                  method="POST"
                  style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit"
                        onclick="return confirm('Are you sure you want to delete this record?')">
                    Delete
                </button>

            </form>
        </td>

    </tr>

    @endforeach

</table>

@endsection