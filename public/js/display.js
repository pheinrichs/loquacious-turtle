var app = angular.module("MyApp", ['ui.bootstrap','angular-svg-round-progress']);

app.controller('ModalDemoCtrl', function ($scope, $modal, $log) {

  $scope.animationsEnabled = true;

  $scope.open = function (URL) {

    var modalInstance = $modal.open({
      animation: $scope.animationsEnabled,
      templateUrl: URL,
      controller: 'ModalInstanceCtrl',
      resolve: {
        items: function () {
          return $scope.items;
        }
      }
    });

    modalInstance.result.then(function (selectedItem) {
      $scope.selected = selectedItem;
    }, function () {
      $log.info('Modal dismissed at: ' + new Date());
    });
  };

});

app.controller('ModalInstanceCtrl', function ($scope, $modalInstance,$window) {
	$scope.days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
	$scope.months = { 
		"months" : [
	{ "name":"Jan" , "value":1 },
	{ "name":"Feb" , "value":2 },
	{ "name":"Mar" , "value":3 },
	{ "name":"Apr" , "value":4 },
	{ "name":"May" , "value":5 },
	{ "name":"June" , "value":6 },
	{ "name":"July" , "value":7 },
	{ "name":"Aug" , "value":8 },
	{ "name":"Sept" , "value":9 },
	{ "name":"Oct" , "value":10 },
	{ "name":"Nov" , "value":11 },
	{ "name":"Dec" , "value":12 } 
	]};
	$scope.years= [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020];

  $scope.ok = function () {
    $modalInstance.dismiss('cancel');
  };

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };

  $scope.delete = function (jobID) {
     $window.location.href = '/remove/job/'+ jobID;
  };

});


app.controller('CarouselDemoCtrl', function ($scope,$http,$filter, $rootScope) {
    $scope.sendID = function(customerID,jobID){
      console.log(customerID,jobID);
      $scope.url = '/pictures/' + customerID.toString() + '/' + jobID.toString();

      $http.get($scope.url)
          .success(function(data){
          $scope.myInterval = 5000;
          $scope.noWrapSlides = false;
          console.log(data);
          $scope.slides = [];
          
          for(var i = 0; i < data.length; i++)
          {
           if(data[i].label1 != null)
          {
            $scope.slides.push({image: '/assets/' + data[i].label1});
          }
          if(data[i].label2 != null)
         {
            $scope.slides.push({image: '/assets/' + data[i].label2});
         }
          if(data[i].label3 != null)
         {
            $scope.slides.push({image: '/assets/' + data[i].label3});
         }
          if(data[i].label4 != null)
         {
            $scope.slides.push({image: '/assets/' + data[i].label4});
         }
          if(data[i].label5 != null)
         {
            $scope.slides.push({image: '/assets/' + data[i].label5});
         }
        }
    });
    };

});