function EventController($scope, $http) {
    $http.get('http://192.168.2.3/Bmsit-Notifier/phpScripts/read_event.php').
        success(function(data) {
            $scope.eventsData = data;
        });
}