@extends('admin.layouts.app')

@section('content')

    <h2>Welcome to Admin Dashboard</h2>

    <p>This is the DECODE Admin Panel.</p>
    <a href="{{ url('/admin/publications') }}">Publications</a></br>
    <a href="{{ url('/admin/working-papers') }}">Working Papers</a><br>
    <a href="{{ url('/admin/advocacy-in-actions') }}">Advocacy in Action</a>


@endsection