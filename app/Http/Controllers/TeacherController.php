<?php

namespace App\Http\Controllers;
use Response;
use App\admin;
use App\Student;
use App\courseList;
use App\batchList;
use App\documentList;
use App\financial;
use App\teacherProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;

class TeacherController extends Controller
{
	public function index(Request $req)
	{
	  if($req->session()->has('username')){
		return view('teacher.index');
	  }else {
		return redirect()->route('login.index');
	  }
	}

  	// Code for Student List Function
	public function studentList(Request $req)
	{
		if($req->session()->has('username')){
		$result = Student::all();
		// $result = Student::all()->sortBy('studentName');
		// $result = Student::all()->sortByDesc('studentName');
		return view('teacher.studentList', ['studentList' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Student Edit Function
	public function editStudent(Request $req)
	{
		if($req->session()->has('username')){
			$result = Student::where('studentId', $req->studentId)->get();
			return Response::json($result);
		}else {
			return redirect()->route('login.index');
		}
	}

	// Code for Student Update
	public function updateStudent(Request $req)
	{
	  if($req->session()->has('username')){
		$student = Student::find($req->studentId);
  
		$student->studentName = $req->studentName;
		$student->studentEmail = $req->studentEmail;
  
		if($student->save()){
		  $arr = ["message" => "Student Updated Successfully!"];
		  return Response::json($arr);
		}else {
		  $result = ["message" => "Student Updated Fail!"];
		  return Response::json($result);
		}
	  }else {
		return redirect()->route('login.index');
	  }
	}
	// Code for Student Details
	public function detailStudent(Request $req)
	{
		if($req->session()->has('username')){
		$result = Student::where('studentId', $req->studentId)->get();
		return Response::json($result);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Delete Student
	public function deleteStudent(Request $req)
	{
		if($req->session()->has('username')){
		if(Student::destroy($req->studentId)){
			$result = Student::all();
			$arr = ["studentList" => $result, "message" => "Student Delete Successfully!"];
			return Response::json($arr);
		}else {
			$result = ["message" => "Student Delete Fail!"];
			return Response::json($result);
		}
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Course List Function
	public function courseList(Request $req)
	{
		if($req->session()->has('username')){
		$result = courseList::all();
		return view('teacher.courseList', ['courseLists' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Course Details
	public function detailCourse(Request $req)
	{
		if($req->session()->has('username')){
		$result = courseList::where('cid', $req->cId)->get();
		return Response::json($result);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Batch List Function
	public function batchList(Request $req)
	{
		if($req->session()->has('username')){
		$result = batchList::all();
		return view('teacher.batchList', ['batchLists' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Batch Details
	public function detailBatch(Request $req)
	{
		if($req->session()->has('username')){
		$result = batchList::where('batchid', $req->batchId)->get();
		return Response::json($result);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Schedule List Function
	public function classSchedule(){
		return view('teacher.classSchedule');
	}

	// Code for Document List Function
	public function documentList(Request $req)
	{
		if($req->session()->has('username')){
		$result = documentList::all();
		return view('teacher.documentList', ['documentLists' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Financial Status Function
	public function financialStatus(Request $req)
	{
		if($req->session()->has('username')){
		$result = financial::all();
		return view('teacher.financialStatus', ['financials' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Profile Function
	public function teacherProfile(Request $req)
	{
		if($req->session()->has('username')){
		$result = teacherProfile::all();
		return view('teacher.teacherProfile', ['teacherProfile' => $result]);
		}else {
		return redirect()->route('login.index');
		}
	}

	// Code for Add Student Function
	public function addStudent(Request $req)
	{
	  if($req->session()->has('username')){
		$result = Student::max('studentId');
		// $dept = Department::all();
  
		if($result != null ){
  
		  $sid = preg_split("/-/", $result);
		  if(sizeof($sid) == 3){
			$result = $sid[1];
			$result = $result + 1;
			$result = '-'.$result.'-';
		  }
		  $data = ['sid' => $result];
		  return view('teacher.addStudent', ['data' => $data]);
		  // print_r($data);
		}else {
		  $result = '-12345-';
		  $data = ['sid' => $result];
		  return view('teacher.addStudent', ['data' => $data]);
		}
	  }else {
		return redirect()->route('login.index');
	  }
	}
  
	// Code for Create Student Function
	public function createStudent(StudentRequest $req)
	{
	  if($req->session()->has('userid')){
		$student = new Student();
		$user = new User();
  
		$sid_merge = $req->studentIdFirst.$req->studentIdMiddle.$req->studentIdLast;
		$student->studentId = $sid_merge;
		$student->studentName = $req->studentName;
		$student->department = $req->department;
		$student->studentEmail = $req->studentEmail;
		$student->studentPhone = $req->studentPhone;
  
		$user->userId = $sid_merge;
		$user->email = $req->studentEmail;
		$user->role = $req->userType;
  
		if($student->save() && $user->save()){
  
		  $req->session()->flash('msg','Student Added Successfully!');
		  return redirect()->route('admin.addStudent');
		}else {
		  $req->session()->flash('msg','something is wrong!');
		  return redirect()->route('admin.addStudent');
		}
	  }else {
		return redirect()->route('login.index');
	  }
	}


	
	


}
