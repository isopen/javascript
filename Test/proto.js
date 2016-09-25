'use strict';

String.prototype.do = function() {
  return this;
}

console.log("test".do());

var Utils = function() {};
Utils.prototype.extends = function(subClass, superClass) {
  subClass.prototype = Object.create(superClass.prototype);
  subClass.prototype.constructor = subClass;
}

var utils = new Utils();

var Programmers = function(data) {
  this.name = data.name;
  this.surname = data.surname;
  this.patronymic = data.patronymic;
}

Programmers.prototype.getFio = function() {
  return this.name + ' ' + this.patronymic + ' ' + this.surname;
}

Programmers.prototype.simple = function() {
  console.log('simple');
  return true;
}

var JavaScriptProgrammers = function(data) {
  this.name = data.name;
  this.surname = data.surname;
  this.patronymic = data.patronymic;
};

utils.extend(JavaScriptProgrammers, Programmers);

JavaScriptProgrammers.prototype.go = function() {
  console.log('go');
  return true;
}

var proger = new Programmers({name: 'Maxim', surname: 'Tyulenev', patronymic: 'Evgenyevich'});

console.log(proger.getFio());

proger = new JavaScriptProgrammers({name: 'Maxim', surname: 'Tyulenev O_o', patronymic: 'Evgenyevich'});

console.log(proger.getFio());

proger.simple();

JavaScriptProgrammers.prototype.simple = function() {
  console.log('simple _O_O_');
  return true;
}

proger.simple();

proger.go();
