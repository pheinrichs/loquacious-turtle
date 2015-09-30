@extends('base')

@section('content')
<br>
<br>
<br>
<br>
<div class="sidebar-wrapper">
  <div class="sidebar">
    
  </div>

</div>
<div class="content-wrapper">
<div class="page-content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-xs-12 col-lg-offset-1" >
        <div class="panel panel-info">
          <div class="panel-heading">
          <div class="text-center">
          <h4>
          <a onclick="document.location = '/advSearch/status/lead';">Lead</a>
           </h4>
          </div>
          </div>
          <div class="panel-body">
              <div  class=" text-center">
                    <h3><% $leads %> / <% $total %></h3>
              </div>
          <div class="text-center"
          round-progress
          max="<% $total %>"
          current="<% $leads %>"
          color="#45ccce"
          bgcolor="#eaeaea"
          radius="100"
          stroke="20"
          semi="true"
          rounded="false"
          clockwise="false"
          responsive="false"
          duration="800"
          animation="easeInOutQuart">
          
          </div>
          </div>
        </div>
      </div>
   
      <div class="col-lg-3 col-md-6 col-xs-12" >
        <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
          <h4>
            <a onclick="document.location = '/advSearch/status/active';">Active</a>
          </h4>
          </div>
          </div>
          <div class="panel-body">
              <div  class=" text-center">
                    <h3  style=""><% $customers %> / <% $total %></h3>
              </div>
          <div class="text-center"
          round-progress
          max="<% $total %>"
          current="<% $customers %>"
          color="#45ccce"
          bgcolor="#eaeaea"
          radius="100"
          stroke="20"
          semi="true"
          rounded="false"
          clockwise="false"
          responsive="false"
          duration="800"
          animation="easeInOutQuart">
          </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-xs-6" >
        <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
          <h4>
          Jobs
          </h4>
          </div>
          </div>
          <div class="panel-body">
          <div class="text-center">
          <h2>
                    <% $jobs %>
          </h2>
          </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  @stop
