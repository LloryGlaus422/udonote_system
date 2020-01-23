
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<body> 
  <form method="POST" action="/register">
  {{ csrf_field() }}
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="firs_tname"><b>Firstname</b></label>
      <input type="text" placeholder="Enter Firstname" name="first_name" required>

      <label for="middle_name"><b>Middlename</b></label>
      <input type="text" placeholder="Enter Middlename" name="middle_name" required>

      <label for="last_name"><b>Lastname</b></label>
      <input type="text" placeholder="Enter Lastname" name="last_name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="age"><b>Age</b></label>
      <input type="number" placeholder="Enter Age" name="age" required>

      <br><br>
      <label ><b>Gender</b></label>
      <input type="radio" name="gender" value="1" > Male
      <input type="radio" name="gender" value="2" > Female

      <br><br>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <button type="submit" class="registerbtn">Register</button>
    </div>
    
    <div class="container signin">
      <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
  </form>

