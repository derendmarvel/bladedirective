<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Projects </title>
</head>
<body>
    <h1> MY PROJECTS </h1>
    <table> 
        <tr> 
            <th> NO</th> 
            <th> PROJECT </th> 
            <th> SEMESTER </th>
            <th> DESCRIPTION </th>
        </tr>
        @php ($projects = ['Calculator', 'Accounting', 
                            'Student Report', 'POS Resto',
                            'Online Store', 'Pet Shop'])
        @foreach ($projects as $pro)
            @break ($loop -> index == 2)
            @if ($loop -> even)
                @php ($semester = "EVEN")
            @else
                @php ($semester = "ODD")
            @endif
            <tr>
                <td> {{ $loop -> index + 1 }} </td> 
                <td> {{ $pro }} </td> 
                <td> {{ $semester }} </td> 
                <td> 
                @if ($loop -> first)
                    My very FIRST Project
                @elseif ($loop -> first)
                    My very LAST Project
                @else
                    Lorem ipsum dolor sit amet.
                @endif
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>