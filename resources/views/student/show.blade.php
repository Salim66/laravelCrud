<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .single-student img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 1px solid #ffffff;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>



<div class="wrap ">
    <a class="btn btn-sm btn-primary" href="{{ asset('student-all') }}">All Student</a>
    <div class="card shadow">
        <div class="card-body single-student">
            <img src="{{ url('/') }}/media/students/{{ $single_student -> photo }}" alt="">
            <h2>{{ $single_student -> name }}</h2>

            <table class="table">
                <tr>
                    <td>Name</td>
                    <td>{{ $single_student -> name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $single_student -> email }}</td>
                </tr>
                <tr>
                    <td>Cell</td>
                    <td>{{ $single_student -> cell }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{ $single_student -> uname }}</td>
                </tr>
            </table>
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
