@extends('navbar.index')

@section('title')
	Teacher | Student List
@endsection

@section('student_ajax')
	<script type="text/javascript" src="{{asset('custom')}}/style/ajax/student.js"></script>
@endsection

@section('studentList')
	<div class="studentList_wraper">
		<div class="studentList_table">
			<div class="student_list_title">
				<h3>Students List of School</h3>
			</div>
			<div class="table_area">
				<table class="student_table" >
					<thead >
						<tr>
							<th>Serial</th>
							<th>Student Id</th>
							<th>Student Name</th>
							<th>Student Email</th>
							<th>Action</th>
							<th>Action</th>
							<th>Action</th>
					</thead>
					<tbody>
						<?php $count =1; ?>
						@foreach ($studentList as $user)
							<tr class="text-center">
								<td>{{$count}}</td>
								<td>{{$user['studentId']}}</td>
								<td>{{$user['studentName']}}</td>
								<td>{{$user['studentEmail']}}</td>
								<td><input type="button" name="view" value="View" id="{{$user['studentId']}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
								<td><input type="button" name="edit" value="Edit" id="{{$user['studentId']}}" class="btn btn-primary btn-sm edit_data table_btn" ></td>
								<td><input type="button" name="delete" value="Delete" id="{{$user['studentId']}}" class="btn btn-primary btn-sm delete_data table_btn" ></td>
							</tr>
						<?php $count++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection


@section('edit_modal')
<div id="edit_student" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">

		<div class="modal-header">
			<h4 class="modal-title">Edit Student</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>

		<div class="modal-body d-flex justify-content-center">
			<form method="post" id="update_student" class="w-75">
			@csrf
			<div class="form-group">
				<label for="">Student Id:</label>
				<input type="text" class="form-control form-control-sm" id="studentId" name="studentId" placeholder="Student Id" readonly>
			</div>
			<div class="form-group">
				<label for="">Student Name:</label>
				<input type="text" class="form-control form-control-sm" id="studentName" name="studentName" placeholder="Student Name">
			</div>
			<div class="form-group">
				<label for="">Student Email:</label>
				<input type="text" class="form-control form-control-sm" id="studentEmail" name="studentEmail" placeholder="Student Email">
			</div>

			<input type="submit" name="update" id="" value="Update" class="btn btn-success" />
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
@endsection

@section('view_modal')
<div id="viewStudent" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Student Details</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body" id="student_detail">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
@endsection


