<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('updateStudent', $student->id)}}" enctype="multipart/form-data">
        @csrf
        <div>
        <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}"><br>
        </div>
        <div>
         <label for="ph">Phone Number:</label>
            <input type="text" id="ph" name="ph" value="{{ $student->ph }}"><br>
        </div>
        <div>
        <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}"><br>  
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
            <input type="text" id="address" name="address" value="{{ $student->address }}"><br>
        </div>
        <div>
        <label>Gender:</label><br>
        @if($student->gender == 'male')
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male" class="radio" checked>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female" class="radio"><br><br>
        @else
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male" class="radio">
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female" class="radio" checked><br><br>
        @endif
        
        </div>
        <div>
        <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="{{ $student->dob }}"><br>
        </div>
        <div>    
        <label for="image">Profile Image:</label>
            <input type="file" id="image" name="image"><br><br>
            <input type="hidden" id="image" name="old_image" value="{{ $student->image }}">
            <img src="{{ asset('images/'. $student->image) }}" width="20" height="20">
        </div>
        <div>
        <button type="submit">Save</button>
        <a href="{{ url('students') }}">Back</a>
        </div>
    </form>
</body>
</html>