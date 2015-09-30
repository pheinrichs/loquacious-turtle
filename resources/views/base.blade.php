
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRM</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="<% URL::asset('/css/centerText.css') %>">
      <script type="text/javascript" src="/js/angular.min.js"> </script>
      <script type="text/javascript" src="/js/ui-bootstrap-0.13.4.min.js"> </script>
      <script type="text/javascript" src="/js/ui-bootstrap-tpls-0.13.4.min.js"> </script>
      <script type="text/javascript" src="<% asset('js/display.js') %>"> </script>
      <script src="http://crisbeto.github.io/angular-svg-round-progressbar/roundProgress.min.js"></script>
</head>
<body ng-app="MyApp" ng-controller="ModalDemoCtrl">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" ng-click="navbarCollapsed = !navbarCollapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
      </button>
      <a class="navbar-brand" href="/">Aace</a>
    </div>
    @include('newcustomer')
    <div class="collapse navbar-collapse" collapse="navbarCollapsed">
      <ul class="nav navbar-nav">
        <li class="active"><a ng-click="open('newcustomer.html')">New Customer <span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-left " method="GET" action="/search">
        <div class=" nav navbar-nav form-inline ">
         <select name="param" class=" btn btn-primary form-control ">
            <option value="name">Name</option>
            <option value="phone">Phone</option>
            <option value="address">Address</option>
            <option value="town">Town</option>
            <option value="label">Job Title</option>
            <option value="Service">Job Date</option>
        </select>
        </div>

        <div class="nav navbar-nav form-inline">
          <input type="text" name="searchValue" class=" input-normal form-control" placeholder="Search" /> 
        </div>
        <div class="nav navbar-nav ">
          <button type="submit" class="btn btn-default form-control">Submit</button>
        </div>     
      </form>
      @include('newUser')
      <div class="navbar-form navbar-right">
      <button type="submit"  ng-click="open('newUser.html')" class="btn btn-info form-control">New user</button>
      <button type="submit"  onclick="window.location='/auth/logout';" class="btn btn-default form-control">Logout <% $name = Auth::user()->name %>?</button>
      </div>
    </div>
  </div>
</nav>
  @yield('content')
</body>
</html>