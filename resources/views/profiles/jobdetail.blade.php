@extends('base')

@section('content')

</br>
</br>
</br>
</br>
<div class="row" ng-controller="ModalDemoCtrl">

<div class="profile">
	 <div class="col-md-3 col-md-offset-4 ">
	 	<div class="panel panel-default ">
			<div class="accountInfo panel-body" >

				<div class="name panel-heading">
 		<button class="btn btn-default" onclick="document.location = '/user/<% $custID %>';">Profile </button>
 		 		<button class="btn btn-default" ng-click="open('editjob.html')">Edit </button>

 		@foreach ($jobs as $value) 
 		<h1>
		    <% $value->label %>
		    </h1>
		    <br>
		    Date: <% $value->Service %>
		    <br>
		    Cost: <% $value->cost %>
		    <br>
		    <br>
		    <% $value->description %>
		    <script type="text/ng-template" id="editjob.html">
        <div class="modal-header">
            <h3 class="modal-title">New Job</h3>
        </div>
        <div class="modal-body">

        <form class="form-horizontal" action="/editjob" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value= "<% $value->id %>">    
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">label</label>  
              <div class="col-md-4">
                <input id="textinput" name="label" type="text" value="Label='<% $value->label %>'"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Date</label>  
              <div class="col-md-4">
                <input id="textinput" name="Service" type="text" value="Service ='<% $value->Service %>'"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Cost</label>  
              <div class="col-md-4">
                <input id="textinput" name="Cost" type="text" value="Cost='<% $value->cost %>'"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">description</label>  
              <div class="col-md-4">
                <input id="textinput" name="description" type="text" value="description='<% $value->description %>'"class="form-control input-md" >
              </div>
            </div> 
        <div class="modal-footer">
            <button class="btn btn-primary" value="submit" type="submit" >Submit</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
            <button class="btn btn-danger pull-left" value="Send" type="button" ng-click="delete(<% $value->jobNumber %>)">Delete</button>
        </div>

        </form>
       value

    </script>

          <div ng-controller="CarouselDemoCtrl" ng-init="sendID(<% $custID %>,<% $value->jobNumber %>)">
          <div style="height: 305px">
            <carousel interval="myInterval" no-wrap="noWrapSlides">
              <slide ng-repeat="slide in slides " active="slide.active">
                <img ng-src="{{slide.image}}" style="margin:auto;">
                <div class="carousel-caption">
                  <h4>Slide {{$index}}</h4>
                  <p>{{slide.text}}</p>
                </div>
              </slide>
            </carousel>
          </div>
				</div>
			</div>
		</div>
	</div>
				 @endforeach


</div>

</div>

 


@stop
