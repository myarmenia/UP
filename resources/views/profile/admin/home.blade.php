@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Admin Page</h1>
@stop

@section('content')
    @can('role-list')
        dddwdwdwd
    @endcan
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
