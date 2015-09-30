@extends('base')

@section('content')

</br>
</br>
</br>
</br>
<div class="row">
 	<ul class="innerTable">
 		<div>
 		<button class="btn btn-default" onclick="document.location = '/user/<% $custID %>';">Profile </button>
 		<br>

 		<br>
 		<table class="table table-hover">
 		    <thead>
 		          <tr>
			        <th>Label</th>
			        <th>Service Date</th>
			        <th>Description</th>
			        <th>Cost</th>
			      </tr>
			</thead>
		<tbody>
 		@foreach ($jobs as $value) 
 		<tr onclick="document.location = '/job/<% $value->jobNumber %>/<% $custID %> ';">
		    <td><% $value->label %></td>
		    <td><% $value->Service %></td>
		    <td><% $value->description %></td>
		    <td><% $value->cost %></td>
		</tr>
		@endforeach
		</tbody>
 		 </table>

		</div>

   	</ul>
</div>



@stop
