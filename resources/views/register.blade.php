<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 400px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}   
    
    </style>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form method="POST" action="/register">
      {{ csrf_field() }}
      <input type="text" name="name" placeholder="Name" />
      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="submit" name="signup_submit" value="Sign me up" />
   </form>
   </div>
  <div class="right">
    <span class="login">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
</body>
</html> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<title> App Name - @yield('title')</title>

<body>
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
        <form method="POST" action="">
            {{ csrf_field() }}
            <center>
                <h1>Add Person</h1>
            </center>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name"  autocomplete="off">
            </div>
            <span class="error">
                    @if($errors->has('first_name'))
                        {{ $errors->first('first_name') }}
                    @endif
                    </span>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name"  autocomplete="off">
            </div>
            <span class="error">
                    @if($errors->has('last_name'))
                        {{ $errors->first('last_name') }}
                    @endif
                    </span>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email"  autocomplete="off">
            </div>
            <span class="error">
                    @if($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                    </span>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age" placeholder="Agel"  autocomplete="off">
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
                <input type="text" class="form-control" name="address" placeholder="Address"  autocomplete="off">
            </div>
            <span class="error">
                    @if($errors->has('address'))
                        {{ $errors->first('address') }}
                    @endif
                    </span>
            <br>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
            <br>
        </form>
    </div>