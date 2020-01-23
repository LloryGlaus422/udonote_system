
@extends('layout')
@section('content')
@yield('header')
@yield('sidebar')

<body>
  <table border=1 id="customers">
    <tr>
      <th>Firstname</th>
      <th>Middlename</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Action</th>

    </tr>
    @foreach($infos as $info)
    <tr>

      <td>{{$info['first_name']}}</td>
      <td>{{$info['middle_name']}}</td>
      <td>{{$info['last_name']}}</td>
      <td>{{$info['email']}}</td>
      <td>{{$info['age']}} year/s old</td>
      <td>
      @if($info['gender'] == 1)
        Male
      @else
        Female
      @endif
      </td>
      <td>{{$info['address']}}</td>
      <td>
        <a href="{{ url('/getInformation',$info->id)}}" class="btn btn-primary">Edit</a>
      </td>
      <td>
        <form action="{{ url('/deleteInformation',$info->id)}}">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
@yield('footer')

@endsection('content')

