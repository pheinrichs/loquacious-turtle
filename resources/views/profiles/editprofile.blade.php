 <script type="text/ng-template" id="editProfile.html">
        <div class="modal-header">
            <h3 class="modal-title">Edit Customer</h3>
        </div>
        <div class="modal-body">

        <form class="form-horizontal"  action="/editProfile" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value= "<% $customer->id %>">    

            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Name</label>  
              <div class="col-md-4">
                <input id="name" name="name" type="text" value="<% $customer->name %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-4">
                <input id="email" name="email" type="text" value="<% $customer->email %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="status">Status</label>  
              <div class="col-md-4">
                <select id="status"  name="status"  class="form-control input-md">
                  <option <?php if($customer->status == 'active'){ echo("selected");} ?> value="active">Active</option>
                  <option <?php if($customer->status == 'lead'){ echo("selected");} ?> value="lead">Lead</option>
                  </select>
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="address">Address</label>  
              <div class="col-md-4">
                <input id="address" name="address" type="text" value="<% $customer->address %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="town">Town</label>  
              <div class="col-md-4">
                <input id="town" name="town" type="text" value="<% $customer->town %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="postal">Postal Code</label>  
              <div class="col-md-4">
                <input id="postal" name="postal" type="text" value="<% $customer->postal %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="homePhone">Home Phone</label>  
              <div class="col-md-4">
                <input id="homePhone" name="homePhone" type="text" value="<% $customer->homePhone %>"class="form-control input-md" >
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-4 control-label" for="cellPhone">Cell Phone</label>  
              <div class="col-md-4">
                <input id="cellPhone" name="cellPhone" type="text" value="<% $customer->cellPhone %>"class="form-control input-md" >
              </div>
            </div> 
        <div class="modal-footer">
            <button class="btn btn-primary" value="submit" type="submit" >Submit</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
        </form>
        </div>

    </script>
