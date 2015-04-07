'use strict';

/**
 * @ngdoc function
 * @name myvocApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the myvocApp
 */
angular.module('myvocApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
