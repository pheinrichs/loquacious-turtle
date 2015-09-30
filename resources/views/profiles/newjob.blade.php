    <script type="text/ng-template" id="newjob.html">
        <div class="modal-header">
            <h3 class="modal-title">New Job</h3>
        </div>
        <div class="modal-body">

        <form class="form-horizontal" action="/newjob" method="post" enctype="multipart/form-data"> 
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value= "<% $customer->id %>">    
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Service Label</label>  
              <div class="col-md-4">
                <input id="textinput"  ng-model="label"  name="label" type="text" placeholder="Title" class="form-control input-md" >
              </div>
            </div> 

          <div class="form-group">
            <label class="col-md-4 control-label" for="cost">Cost</label>  
            <div class="col-md-4">
              <input id="cost"  ng-model="cost"  name="cost" type="text" placeholder="cost" class="form-control input-md">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Date</label>
            <div class="col-md-3">
              <select id="selectbasic" name="year"class="form-control" ng-model="year">
              <option  disabled >Year</option>
                <option  ng-repeat="n in years"  value="{{n}}">{{n}}</option>
              </select>
      
              <select id="selectbasic" name="month"class="form-control" ng-model="month">
              <option  disabled >Month</option>
                <option  ng-repeat="n in months.months"  value="{{n.value}}" >{{n.name}}</option>
              </select>

              <select id="selectbasic" name="day" class="form-control" ng-model="day">
              <option  disabled placeholder="Year">Year</option>
                <option  ng-repeat="n in days"  value="{{n}}">{{n}}</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>
            <div class="col-md-4">                     
              <textarea class="form-control"  ng-model="description"  id="description" name="description" placeholder="Description"></textarea>
            </div>
            </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="pic1">Image</label>
              <div class="col-md-4">
              <input type="file" name="pic1" accept="image/*">
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-4 control-label" for="pic2">Image</label>
              <div class="col-md-4">
                <input type="file" name="pic2" accept="image/*">
              </div>
          </div>

           <div class="form-group">
            <label class="col-md-4 control-label" for="pic3">Image</label>
              <div class="col-md-4">
                <input type="file" name="pic3" accept="image/*">
              </div>
          </div>

           <div class="modal-footer">
            <button class="btn btn-primary" type="submit" value="submit" >Submit</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
      </form>

    </script>
