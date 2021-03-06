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


	<div class="wrap-table ">
        <a class="btn btn-sm btn-primary" href="{{ asset('student') }}">Add new Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
                @include('validation')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    @foreach( $students as $student )
						<tr>
							<td>{{ $loop -> index+1 }}</td>
							<td>{{ $student -> name }}</td>
							<td>{{ $student -> email }}</td>
							<td>{{ $student -> cell }}</td>
							<td><img src="{{ URL::to('media/students').'/'. $student -> photo }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ url('student-single').'/' . $student -> id  }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ url('student-edit/' . $student -> id) }}">Edit</a>
                                <form style="display: inline-block" action="{{ url('student-delete/' . $student -> id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
							</td>
						</tr>
                    @endforeach

					</tbody>
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
    <br>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
