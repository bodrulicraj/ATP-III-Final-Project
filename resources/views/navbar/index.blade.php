<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta charset="utf-8">
		<!-- <title>Online School - Teacher</title> -->
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/teacher/teacher.css">
		<link rel="stylesheet" href="/css/teacher/studentList.css">
		<link rel="stylesheet" href="/css/teacher/courseList.css">
		<link rel="stylesheet" href="/css/teacher/batchList.css">
		<link rel="stylesheet" href="/css/teacher/documentList.css">
		<link rel="stylesheet" href="/css/teacher/profile.css">
		<link rel="stylesheet" href="/css/teacher/addUser.css">


		<!--  -->
		<link rel="stylesheet" href="{{asset('custom')}}/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="{{asset('custom')}}/bootstrap/js/bootstrap.min.js"></script>

		@yield('student_ajax')
  	</head>
	
	<body>
		<div class="full_container">
			<div class="teacher_header_wraper">
				<div class="teacher_header container_center">
					<div class="teacher_logo">
						<a href="#"><img src="/images/logo.png" alt="Logo"/></a>
						<!-- <a href="#"><h2>Online School Portal</h2></a> -->
						<a href="#"><h2>School Portal</h2></a>
					</div>

					<div class="teacher_menu_icon">
						<ul>
							<!-- <li><a href="/teacher/cancel_course">&#x271A Cancel Course</a></li>
							<li><a href="/teacher/cancel_batch">&#x271A Cancel Batch</a></li>
							<li><a href="/teacher/upload_grade">&#x271A Upload Grade</a></li>
							<li><a href="/teacher/upload_document">&#x271A Upload Document</a></li> -->
							<!-- <li><a href="/logout/logout" style="font-size: 26px;padding-top: 3px;" title="Logout">&#x27A5</a></li> -->
						</ul>
					</div>
				</div>
			</div>		
			
			<div class="content_wraper">
				<div class="content container_center">
					<div class="content_left">
						<div class="teacher_photo">
							<!--<img src="" alt="Profile Photo" />-->						
  							<!-- <img src="/images/team/bodrul.jpg" alt="Bodrul" /> -->
						</div>
						<div class="teacher_name">
							<p>Welcome, Bodrul</P>							
						</div>						
						<div class="teacher_menu_section">
							<ul>
								<li><a href="{{route('teacher.index')}}"> My Account</a></li>
								<li><a href="{{route('teacher.addStudent')}}">&#x2756 Add</a></li>
								<li><a href="{{route('teacher.studentList')}}">&#x2756 Students List</a></li>
								<li><a href="{{route('teacher.courseList')}}">&#x2756 Course List</a></li>
								<li><a href="{{route('teacher.batchList')}}">&#x2756 Batch List</a></li>
								<li><a href="{{route('teacher.classSchedule')}}">&#x2756 Class Schedule</a></li>
								<li><a href="{{route('teacher.documentList')}}">&#x2756 Document List</a></li>
								<li><a href="{{route('teacher.financialStatus')}}">&#x2756 Financial Status</a></li>
								<li><a href="{{route('teacher.teacherProfile')}}">&#x2756 Profile</a></li>
								<!-- <li><a href="{{route('teacher.message')}}">&#x2709 Message</a></li> -->
								<li><a href="{{route('teacher.changePassword')}}">&#x274B Change Password</a></li>
								<li><a href="{{route('logout.logout')}}">&#x27A5 Logout</a></li>
							</ul>
						</div>
					</div>
					
					<div class="content_right">
						@yield('add')
						@yield('teacher')
						@yield('studentList')
						@yield('courseList')
						@yield('batchList')
						@yield('classSchedule')
						@yield('documentList')
						@yield('financialStatus')
						@yield('teacherProfile')
						@yield('changePassword')
					</div>
				</div>
			</div>			
			<div class="footer_wraper">
				<div class="footer container_center">
					<div class="footer_top">
					</div>
					<div class="footer_bottom">
						<p>Copyright 2018-19 &copy; onlineschool.com <br/> &reg All Right Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

@yield('edit_modal')
@yield('view_modal')