@extends('layouts.template')

@section('title', 'Student')
@section('pagetitle', 'Student Detail')

@section('main_content')
    <div class = "mt-4 p-5 bg-primary text-white rounded">
        <h1> Name: {{ $student['name'] }} </h1>
        <p> Course: {{ $student['nim'] }} </p>
        <p> Course: {{ $student['ipk'] }} </p>
        <p> Code: {{ $student['email'] }} </p>
    </div>
@endsection