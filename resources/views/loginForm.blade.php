<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<title> App Name - @yield('title')</title>

<body>
    <div id="div">
        <form method="GET" action="/login">
            {{ csrf_field() }}
            <center>
                <h1>Log In</h1>
            </center>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
            </div>
            <span class="error">
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
            </span>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password" autocomplete="off">
            </div>
            <span class="error">
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </span>

            <center><button type="submit" class="btn btn-primary">Submit</button></center>
            <br>
        </form>
    </div>