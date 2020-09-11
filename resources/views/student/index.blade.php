<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>



	<div class="wrap ">
        <a class="btn btn-sm btn-primary" href="{{ asset('student-all') }}">All Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Student</h2>

                {{--validation message--}}
                @include('validation')

				<form action="{{ url('student-add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ old('name') }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ old('email') }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{ old('cell') }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="{{ old('uname') }}" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control" type="file">
                    </div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
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
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
