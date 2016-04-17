function EventController($scope, $http) {
    $http.get('http://'+ip+'/phpScripts/read_event.php').
        success(function(data) {
            $scope.eventsData = data;
        });
}
