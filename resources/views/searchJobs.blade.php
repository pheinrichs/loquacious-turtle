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
			        <th>Title</th>
			        <th>Description</th>
			        <th>Date</th>
			        <th>Cost</th>
			      </tr>
			</thead>
		<tbody>
 		@foreach ($results as $value) 
 		<tr onclick="document.location = '/user/<% $value->id %>';">
 			<td><% $value->name %></td>
		    <td><% $value->label %></td>
		    <td><% $value->description %></td>
		    <td><% $value->Service %></td>
		    <td><% $value->cost %></td>
		</tr>
		@endforeach
		</tbody>
 		 </table>

		</div>

   	</ul>
</div>

@stop
