@extends('layouts.template')

@section('title', 'Campuses')
@section('pagetitle', 'UC Campuses')

    @section('main_content')

        <table class="table table-striped ">
            <tr>
                <th> No </th>
                <th> Name </th>
                <th> Address </th>
                <th> City </th>
                <th> Contact Number </th>
            </tr>
            @foreach ($campuses as $campus)
            <tr>
                <td> {{ $campus['id'] }} </a> </td>
                <td> <a href = "campus/{{ $campus['id'] }}">  {{ $campus['name'] }} </a> </td>
                <td> {{ $campus['address'] }} </td>
                <td> {{ $campus['city'] }} </td>
                <td> {{ $campus['phone'] }} </td>
            </tr>
            @endforeach
        </table>
    @endsection