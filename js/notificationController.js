function NotificationController($scope, $http) {
    $http.get('http://'+ip+'/Bmsit-Notifier/phpScripts/read_notif.php').
        success(function(data) {
            $scope.notificationData = data;
        });
}
