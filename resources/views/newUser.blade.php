    <script type="text/ng-template" id="newUser.html">
        <div class="modal-header">
            <h3 class="modal-title">New Job</h3>
        </div>
        <div class="modal-body">

        <form class="form-horizontal" action="/auth/register" method="POST" > 
            {!! csrf_field() !!}

            <div class="form-group">
              <label class="col-md-4 control-label" for="Name">Name</label>  
              <div class="col-md-4">
                <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md" >
              </div>
            </div> 

          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
            </div>
          </div>
      
          <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-4">                     
              <input class="form-control" type="password" id="password" name="password"></input>
            </div>
            </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="password_confirmation">Confirm Password</label>
            <div class="col-md-4">                     
              <input class="form-control"  type="password" id="password_confirmation" name="password_confirmation"></input>
            </div>
            </div>


           <div class="modal-footer">
            <button class="btn btn-primary" type="submit" value="submit" >Submit</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
      </form>

    </script>
