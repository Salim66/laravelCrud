<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>



<div class="wrap ">
    <a class="btn btn-sm btn-primary" href="{{ asset('student-all') }}">All Student</a>
    <div class="card shadow">
        <div class="card-body">
            <h2>Update {{ $edit_student -> name }} Data</h2>

            {{--validation message--}}
            @include('validation')

            <form action="{{ url('student-update/' . $edit_student -> id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" class="form-control" value="{{ $edit_student -> name }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" class="form-control" value="{{ $edit_student -> email }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input name="cell" class="form-control" value="{{ $edit_student -> cell }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" value="{{ $edit_student -> uname }}" type="text">
                </div>
                <div class="form-group">
                    <img style="width: 200px" src="{{ URL::to('/') }}/media/students/{{ $edit_student -> photo }}" alt="">
                    <input name="old_photo" value="{{ $edit_student -> photo }}" type="hidden">
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input name="new_photo" class="form-control" type="file">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update Student">
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>








<!-- JS FILES  -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
