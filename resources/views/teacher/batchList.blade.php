@extends('navbar.index')

@section('title')
	Teacher | Batch List
@endsection

@section('student_ajax')
	<script type="text/javascript" src="{{asset('custom')}}/style/ajax/batch.js"></script>
@endsection

@section('batchList')
	<div class="batchList_wraper">
		<div class="batchList_table">
			<div class="batch_list_title">
				<h3>Batch List of School</h3>
			</div>
		
			<div id="dataShow">

			</div>								
			<div class="table_area">                           
				<table class="batch_table" >
					<thead>
						<tr>
							<th>Serial</th>
							<th>Batch ID</th>
							<th>Course Name</th>
							<th>Credit</th>
							<th>Duration</th>
							<th>Action</th>
						</tr>
					</thead>
								
					<tbody>
						@foreach ($batchLists as $batchList)
							<tr class="course_row">
								<td> {{$batchList['id']}}</td>
								<td> {{$batchList['batchid']}}</td>
								<td> {{$batchList['coursename']}}</td>
								<td> {{$batchList['credit']}}</td>
								<td> {{$batchList['duration']}}</td>
								<td><input type="button" name="view" value="View" id="{{$batchList['batchid']}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
							</tr>					
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
	</div>				
@endsection

@section('view_modal')
<div id="viewBatch" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Batch Details</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body" id="batch_detail">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
@endsection