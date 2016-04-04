function Hello($scope, $http) {
    $http.get('http://localhost/androidDemo/phpScripts/read_event.php').
        success(function(data) {
            $scope.eventsData = data;
        });
}