<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update User</h1>

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
        <form method="post" class="form" action="{{ url('/editInformation', $infos->id) }}"> 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ old('first_name', $infos->first_name) }} >
            </div>

            <div class="form-group">
                <label for="last_name">Middle Name:</label>
                <input type="text" class="form-control" name="middle_name" value={{ $infos->middle_name }} >
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $infos->last_name }} >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ old('email', $infos->email ) }} >
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" value={{ $infos->age }} >
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="1" {{ old('gender', $infos->gender == 1) ? 'checked' : '' }}> Male
                <input type="radio" name="gender" value="2" {{ old('gender', $infos->gender == 2) ? 'checked' : '' }}> Female
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value={{ $infos->address }} >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" value={{ $infos->password }} >
            </div>
            <button type="submit" class="btn btn-primary submit">Update</button>
        </form>
    </div>
</div>
