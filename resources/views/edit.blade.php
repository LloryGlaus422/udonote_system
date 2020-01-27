<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<title> App Name - @yield('title')</title>



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<br />
@endif
<div id="div">
    <form method="POST" action="{{ url('edit', $human->id) }}">
        {{ csrf_field() }}
        <center>
            <h1>Edit Person</h1>
        </center>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" 
                value="{{ old('first_name', $human->first_name) }}"  autocomplete="off">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                value="{{ $human->last_name }}"  autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email"
                value="{{ $human->email }}"  autocomplete="off">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Agel" value="{{ $human->age}}"  autocomplete="off">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <br>
            <input type="radio" name="gender" value="1" value="{{ $human->gender }}"> Male
            <input type="radio" name="gender" value="2" value="{{ $human->gender }}"> Female
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $human->address }}"  autocomplete="off">
        </div>
        <br>
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
        <br>
    </form>
</div>