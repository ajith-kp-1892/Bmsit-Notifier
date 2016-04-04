function NotificationController($scope, $http) {
    $http.get('http://192.168.2.3/Bmsit-Notifier/phpScripts/read_notif.php').
        success(function(data) {
            $scope.notificationData = data;
        });
}