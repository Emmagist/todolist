@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default m-3">Go Back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="label label-danger"></div>
    <hr>
    <p>{{ $todo->content }}</p>
@endsection