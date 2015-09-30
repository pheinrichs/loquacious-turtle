@extends('base')

@section('content')

</br>
</br>
</br>
</br>
<div class="row">
 	<ul class="innerTable" >
 		<div>
 		<table class="table table-hover">
 		    <thead>
 		          <tr>
			        <th>Name</th>
			        <th>Status</th>
			        <th>Home Phone</th>
			        <th>Cell Phone</th>
			        <th>Address</th>
			        <th>Town</th>
			      </tr>
			</thead>
		<tbody>
 		@foreach ($results as $value) 
 		<tr onclick="document.location = '/user/<% $value->id %>';">
		    <td><% $value->name %></td>
		    <td><% $value->status %></td>
		    <td><% $value->homePhone %></td>
		    <td><% $value->cellPhone %></td>
		    <td><% $value->address %></td>
		    <td><% $value->town %></td>
		</tr>
		@endforeach
		</tbody>
 		 </table>

		</div>

   	</ul>
</div>

@stop
