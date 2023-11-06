@extends('layouts.template')

@section('title', 'Students')
@section('pagetitle', 'Student List')

@section('main_content')

        <table class="table table-striped ">
            <tr>
                <th> NIM </th>
                <th> Name </th>
                <th> IPK </th>
                <th> Email </th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td> {{ $student['nim'] }} </a> </td>
                <td> <a href = "student/{{ $student['nim'] }}">  {{ $student['name'] }} </a> </td>
                <td> {{ $student['ipk'] }} </td>
                <td> {{ $student['email'] }} </td>
            </tr>
            @endforeach
        </table>
    @endsection