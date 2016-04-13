function NotificationController($scope, $http) {
    $http.get('http://'+ip+'/phpScripts/read_notif.php').
        success(function(data) {
            $scope.notificationData = data;
        });
}
