@extends('layout')
@section('title','Training')
@section('sidebar')
@section('content')
<table id="customers" border=1px>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th colspan=2>Actions</th>
    </tr>
    @foreach($humans as $human)
    <tr>
        <td>{{ $human['first_name'] }}</td>
        <td>{{ $human['last_name'] }}</td>
        <td>{{ $human['email'] }}</td>
        <td>{{ $human['age'] }}</td>
        @if($human['gender'] == '1')
        <td>Male</td>
        @else
        <td>Female</td>
        @endif
        <td>{{ $human['address'] }}</td>

        <td>
            <a href="{{url('/editForm',$human->id)}}" class="btn btn-primary">Edit</a>
        </td>
        <td>
            <form action="{{ url('/delete', $human->id )}}" method="get">
                @csrf
                <!-- @method('DELETE') -->
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
@section('footer')
@endsection