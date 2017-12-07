yepnope({
  test: Modernizr.inputtypes.number,
  yep: ['script/numPolyfill.js', 'css/number.css'],
  nope: ['script/numPolyfill.js', 'css/number.css'],
  complete : function() {
  //  console.log('YepNope + Modernizr are done');
  }
});