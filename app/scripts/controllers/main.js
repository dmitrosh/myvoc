'use strict';

/**
 * @ngdoc function
 * @name myvocApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the myvocApp
 */
angular.module('myvocApp')
  .controller('MainCtrl', ['$scope', 'wordList', function ($scope, wordList) {
      wordList.success(function(a){console.log(a);});
    $scope.words = [];//wordList;
  }]);
