@extends('navbar.index')

@section('title')
	Teacher | Course List
@endsection

@section('student_ajax')
	<script type="text/javascript" src="{{asset('custom')}}/style/ajax/course.js"></script>
@endsection

@section('courseList')
	<div class="courseList_wraper">
		<div class="courseList_table">
			<div class="course_list_title">
				<h3>Course List of School</h3>
			</div>													
			<div id="dataShow">

			</div>								
			<div class="table_area">                           
				<table class="course_table" >
					<thead>
						<tr>
							<th>Serial</th>
							<th>Course ID</th>
							<th>Course Name</th>
							<th>Credit</th>
							<th>Department</th>		
							<th>Action</th>		
						</tr>
					</thead>
					<tbody>
						@foreach ($courseLists as $cList)
							<tr class="course_row">
								<td> {{$cList['id']}}</td>
								<td> {{$cList['cid']}}</td>
								<td> {{$cList['cname']}}</td>
								<td> {{$cList['credit']}}</td>
								<td> {{$cList['department']}}</td>
								<td><input type="button" name="view" value="View" id="{{$cList['cid']}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
							</tr>					
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
	</div>
@endsection

@section('view_modal')
<div id="viewCourse" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Course Details</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body" id="course_detail">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
@endsection