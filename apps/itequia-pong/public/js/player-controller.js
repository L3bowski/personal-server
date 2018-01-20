var app = angular.module('ItequiaPong');

app.controller('PlayerCtrl', function($scope, $routeParams) {
    for (var index in $scope.ranking) {
        var player = $scope.ranking[index];
        if (player.name === $routeParams.playerName) {
            $scope.player = player;
            break;
        }
    }
});