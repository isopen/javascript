'use strict';

function SimpleArrow() {
  this.spaces = '';
  this.s = 'JavaScript'.split('');
  var simple = () => {
    this.s.forEach((item) => {
      console.log(this.spaces + item);
      this.spaces += ' ';
    });
    return true;
  };
  simple();
}

var simpleArrow = new SimpleArrow();