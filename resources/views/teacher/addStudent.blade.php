@extends('navbar.index')

@section('title')
  Teacher | Add Student
@endsection



@section('add')
<div class="addUser w-75 mx-auto mt-5">
  <h5 class="text-center">Add Teacher</h5>
  <span class="alert text-white p-0 py-1 m-0 mt-2 d-block text-center">{{session('msg')}}</span>
  <form method="post" class="w-50 mx-auto mt-3 pb-4 text-white clearfix">
    @csrf
    <div class="form-group">
      <label for="" class="d-block">Teacher Id:</label>
      <select class="form-control form-control-sm d-inline w-25" id="" name="studentIdFirst">
        <option value="">Select</option>
        @for ($i=19; $i < 50; $i++)
        <option value="{{$i}}">{{$i}}</option>
        @endfor
      </select>

      <input type="text" class="form-control form-control-sm d-inline w-25 text-center" value="{{$data['sid']}}" id="" name="studentIdMiddle" readonly>

      <select class="form-control form-control-sm d-inline w-25" id="" name="studentIdLast">
        <option value="">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>

    </div>
    @if ($errors->has('studentIdFirst'))
      <p>{{ $errors->first('studentIdFirst') }}</p>
      @else
      <p>{{ $errors->first('studentIdLast') }}</p>
    @endif
    <div class="form-group">
      <label for="">Teacher Name:</label>
      <input type="text" class="form-control form-control-sm" id="" name="studentName" placeholder="Teacher Name">
    </div>
    @if ($errors->has('studentName'))
      <p>{{ $errors->first('studentName') }}</p>
    @endif


    <div class="form-group">
      <label for="">User Role:</label>
      <select class="form-control form-control-sm" id="" name="userType">
        <option value="">Select Role</option>
        <option value="student">Student</option>
      </select>
    </div>
    @if ($errors->has('userType'))
      <p>{{ $errors->first('userType') }}</p>
    @endif

    <div class="form-group">
      <label for="">Teacher Email:</label>
      <input type="text" class="form-control form-control-sm" id="" name="studentEmail" placeholder="Teacher Email">
    </div>
    @if ($errors->has('studentEmail'))
      <p>{{ $errors->first('studentEmail') }}</p>
    @endif

    <div class="form-group">
      <label for="">Teacher Phone No.:</label>
      <input type="number" class="form-control form-control-sm" id="" name="studentPhone" placeholder="Teacher Phone">
    </div>
    @if ($errors->has('studentPhone'))
      <p>{{ $errors->first('studentPhone') }}</p>
    @endif

    <!-- <div class="form-group">
      <label for="">Student Photo:(optional)</label>
      <input type="file" class="form-control-file border" name="studentPhoto">
    </div> -->

    <button type="submit" class="btn btn-sm btn-block btn-primary">Add Teacher</button>
  </form>
</div>
@endsection
