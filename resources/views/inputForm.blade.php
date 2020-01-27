<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<title> App Name - @yield('title')</title>

<body>
    <div id="div">
        <form method="POST" action="/insertData">
            {{ csrf_field() }}
            <center>
                <h1>Add Person</h1>
            </center>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name" autocomplete="off" value="{{ old('first_name') }}">
            </div>
            <span class="error">
                @if($errors->has('first_name'))
                {{ $errors->first('first_name') }}
                @endif
            </span>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" autocomplete="off" value="{{ old('last_name') }}">
            </div>
            <span class="error">
                @if($errors->has('last_name'))
                {{ $errors->first('last_name') }}
                @endif
            </span>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">
            </div>
            <span class="error">
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
            </span>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age" placeholder="Age" autocomplete="off" value="{{ old('age') }}">
            </div>
            <span class="error">
                @if($errors->has('age'))
                {{ $errors->first('age') }}
                @endif
            </span>
            <div class="form-group">
                <label>Gender</label>
                <br>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="2"> Female
            </div>
            <span class="error">
                @if($errors->has('gender'))
                {{ $errors->first('gender') }}
                @endif
            </span>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address" autocomplete="off" value="{{ old('address') }}">
            </div>
            <span class="error">
                @if($errors->has('address'))
                {{ $errors->first('address') }}
                @endif
            </span>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" value="{{ old('password') }}">
            </div>
            <span class="error">
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </span>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
            <br>
        </form>
    </div>