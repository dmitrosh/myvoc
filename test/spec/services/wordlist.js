'use strict';

describe('Service: wordList', function () {

  // load the service's module
  beforeEach(module('myvocApp'));

  // instantiate service
  var wordList;
  beforeEach(inject(function (_wordList_) {
    wordList = _wordList_;
  }));

  it('should do something', function () {
    expect(!!wordList).toBe(true);
  });

});
