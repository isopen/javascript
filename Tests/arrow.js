'use strict';

var SimpleArrow = function(p) {
  this.spaces = '';
  this.s = p.split('');
}

SimpleArrow.prototype.show = function() {
    this.s.forEach((item) => {
      console.log(this.spaces + item);
      this.spaces += ' ';
    });
    return true;
}

module.exports = SimpleArrow;