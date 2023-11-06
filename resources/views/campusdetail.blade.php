@extends('layouts.template')

@section('title', 'Campus')
@section('pagetitle', 'Campus Details')

@section('main_content')
    <div class = "mt-4 p-5 bg-primary text-white rounded">
        <h1> Campus: {{ $campus['name'] }} </h1>
        <p> City: {{ $campus['city'] }} </p>
        <p> Address: {{ $campus['address'] }} </p>
        <p> Phone: {{ $campus['phone'] }} </p>
    </div>
@endsection