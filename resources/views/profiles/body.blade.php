@extends('base')

@section('content')

</br>
</br>
</br>
</br>
<div class="row" >
	 <div class="col-lg-3 col-md-3  col-md-offset-3 ">
	 	<div class="panel panel-info ">
				@include('profiles.editprofile')
				<div class="panel-heading">
					<button type="button" class="btn btn-default btn-sm  pull-right" ng-click="open('editProfile.html')">Edit</button>
					<h1>
					<% $customer->name %>
					</h1>
				</div>
				<div class="panel-body">
					<% $customer->status %>
					<br>
					<% $customer->email %>
				<address>
					<% $customer->address%>
					<br>
					<% $customer->town %>,<% $customer->postal %>
					<br>
					<abbr title="Phone">H:</abbr><% $customer->homePhone %>
					<br>
					<abbr title="Phone">C:</abbr><% $customer->cellPhone %>
				</address>
				</div>
		</div>
	</div>
				
@include('profiles.newjob')
<div class="col-md-4" ng-controller="ModalDemoCtrl">		
	<div class=" panel panel-default" >
		<div class="accountInfo panel-body" style="max-height: 500;overflow-y: scroll;">
			<div class="name h4">
				Jobs
				<button type="button" class="btn btn-info btn-sm pull-right" ng-click="open('newjob.html')">New Job</button>

			</div> 
			<table class="table table-hover">
		 		<thead>
		 	        <tr>
				        <th>Title</th>
				        <th>Date</th>
				        <th>cost</th>
		     	    </tr>
				</thead>
				<tbody>
			 	@foreach ($jobs as $value) 
			 		<tr onclick="document.location = '/job/<% $value->jobNumber %>/<% $customer->id %>';">
					    <td><% $value->label %></td>
					    <td><% $value->Service %></td>
					    <td><% $value->cost %></td>
					</tr>
				@endforeach
				</tbody>
		 	</table>
		 	<button type="button" class="btn btn-default btn-block" onclick="document.location = '/jobs/<% $customer->id %>'">View All</button>
		 </div>
	</div>
</div>
</div>
@stop
