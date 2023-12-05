@extends('layouts.admin')

@section('content')
    <h1>{{$project->title}}</h1>
    <p>{{$project->creation_date}}</p>
@endsection
