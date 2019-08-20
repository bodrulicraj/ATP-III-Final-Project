@extends('navbar.index')

@section('title')
	Teacher | Class Schedule
@endsection

@section('classSchedule')

<div class="studentList_wraper">
		<div class="studentList_table">
			<div class="student_list_title">
				<h3>Students List of School</h3>
			</div>
			<div class="table_area">
				<table class="student_table" >
					<thead >
						<tr>
							<th>#</th>
							<th>Sun</th>
							<th>Mon</th>
							<th>Tus</th>
							<th>Wed</th>
							<th>Thu</th>
							<th>Fri</th>
							<th>Sat</th>
						</tr>
						<tr>
							<th>09:00-11:00</th>
						</tr>
						<tr>
							<th>11:00-02:00</th>
						</tr>	
						<tr>
							<th>02:00-05:00</th>
						</tr>		
					</thead>
				</table>
			</div>
		</div>
	</div>
@endsection