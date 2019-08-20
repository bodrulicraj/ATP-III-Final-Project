@extends('navbar.index')

@section('title')
	Teacher | Document List
@endsection

@section('documentList')
    <div class="documentList_wraper">
		<div class="documentList_table">
			<div class="document_list_title">
    			<h3>Document List of School</h3>
			</div>
            
            <div id="dataShow">
			</div>								
			<div class="table_area">                           
				<table class="document_table" >
					<thead>
						<tr>
    						<th>Serial</th>
							<th>Document Name</th>
							<th>Update Date</th>											
    						<th>Action</th>												
    						<th>Action</th>												
						</tr>
					</thead>
                    <tbody>
					    @foreach ($documentLists as $dList)
							<tr class="course_row">
								<td> {{$dList['id']}}</td>
								<td> {{$dList['dname']}}</td>
								<td> {{$dList['date']}}</td>
								<td><input type="button" name="edit" value="Edit" id="" class="btn btn-primary btn-sm edit_data" /></td>
								<td><input type="button" name="view" value="View" id="" class="btn btn-primary btn-sm view_data" /></td>
							</tr>					
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
	</div>
@endsection