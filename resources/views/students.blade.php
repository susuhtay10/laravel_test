<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Students List</h2>
  <a href="{{ url('registrationform') }}">Create</a>
  <table class="table">
    <thead>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>Image</th>
        <th>Action</th>
    </thead>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->ph }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->dob }}</td>
            <td>
                <img src="{{ asset('images/'. $student->image) }}" width="20" height="20">
            </td>
            <td>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('editStudent', $student->id) }}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('PUT')
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('deleteStudent', $student->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>


