@extends('navbar.index')


@section('title')
	Teacher | Financial List
@endsection

@section('financialStatus')
    <div class="documentList_wraper">
		<div class="documentList_table">
			<div class="document_list_title">
    			<h3>Financial Status</h3>
			</div>
            
            <div id="dataShow">
			</div>								
			<div class="table_area">                           
				<table class="document_table" >
					<thead>
						<tr>
    						<th>Serial</th>
							<th>Date</th>
							<th>Particulars</th>
							<th>Balance</th>											
						</tr>
					</thead>
                    <tbody>
					    @foreach ($financials as $financial)
							<tr class="course_row">
								<td> {{$financial['id']}}</td>
								<td> {{$financial['date']}}</td>
								<td> {{$financial['particulars']}}</td>
								<td> {{$financial['balance']}}</td>
							</tr>					
						@endforeach
					</tbody>
				</table>
			</div>								
		</div>
	</div>
@endsection