'use strict';

/**
 * @ngdoc service
 * @name myvocApp.wordList
 * @description
 * # wordList
 * Provider in the myvocApp.
 */
angular.module('myvocApp')
  .provider('wordList', function () {

    // Private variables
    var salutation = 'Hello';

    // Private constructor

    // Public API for configuration
    this.setSalutation = function (s) {
      salutation = s;
    };

    // Method for instantiating
    this.$get = function ($http) {
      return $http.get('http://localhost/myvoc/rest/wordlist/');
      /*{
        'apple': ['фрукт', 'компания'],
        'set': ['набор']
      };*/
    };
  });
