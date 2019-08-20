<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
   	return view('index');
});


Route::get('/login','LoginController@index')->name('login.index');
Route::get('/login','LoginController@index')->name('log.index');
Route::post('/login','LoginController@verify')->name('login.verify');

Route::get('/teacher', 'TeacherController@index')->name('teacher.index');

Route::get('/addStudent', 'TeacherController@addStudent')->name('teacher.addStudent');
Route::post('/addStudent', 'TeacherController@createStudent');

Route::get('/studentList', 'TeacherController@studentList')->name('teacher.studentList');
Route::get('/courseList', 'TeacherController@courseList')->name('teacher.courseList');
Route::get('/batchList', 'TeacherController@batchList')->name('teacher.batchList');
Route::get('/classSchedule', 'TeacherController@classSchedule')->name('teacher.classSchedule');
Route::get('/documentList', 'TeacherController@documentList')->name('teacher.documentList');
Route::get('/financialStatus', 'TeacherController@financialStatus')->name('teacher.financialStatus');
Route::get('/teacherProfile', 'TeacherController@teacherProfile')->name('teacher.teacherProfile');
Route::get('/message', 'TeacherController@message')->name('teacher.message');
Route::get('/changePassword', 'TeacherController@changePassword')->name('teacher.changePassword');

Route::get('editStudent', 'TeacherController@editStudent')->name('teacher.editStudent');
Route::post('editStudent', 'TeacherController@updateStudent');
Route::get('student_detail', 'TeacherController@detailStudent')->name('teacher.detailStudent');
Route::get('delete_student', 'TeacherController@deleteStudent')->name('teacher.deleteStudent');

Route::get('course_detail', 'TeacherController@detailCourse')->name('teacher.detailCourse');
Route::get('batch_detail', 'TeacherController@detailBatch')->name('teacher.detailBatch');


Route::get('/logout', 'LogoutController@index')->name('logout.logout');
