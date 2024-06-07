@extends('main')
@section('content')
<style>
  body {

    background-color: #f4f4f4;
 
}

form {
    display:inline;
} 

input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"],
input[type="file"],
textarea {
    width: 50%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}


</style>
<p1><center><B>User Registration Form</B></center></p1> <br>
<form method="POST" action="{{route('registrationform')}}">
    @csrf
    <div>
    <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
    </div>
    <div>
     <label for="ph">Phone Number:</label>
        <input type="text" id="ph" name="ph"><br>
    </div>
    <div>
    <label for="email">Email Address:</label>
        <input type="email" id="email" name="email"><br>  
    </div>
    <div>
    <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="button" id="togglePassword">Show</button><br><br>
    </div>
    <div>
    <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation"><br>
    </div>
    <div>
    <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>
    </div>
    <div>
    <label>Gender:</label><br>
    <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male" class="radio">
    <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female" class="radio"><br><br>
    </div>
    <div>
    <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br>
    </div>
    <div>    
    <label for="image">Profile Image:</label>
        <input type="file" id="image" name="image"><br><br>
    </div>
    <div>
    <button name="button" id="submit">Login</button>
    </div>
</form>
@endsection
 