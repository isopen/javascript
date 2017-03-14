"use strict";

var a = "hello hello hello      hello hellow привет привет привет приvet hello hello ПРИВЕТ ПРИВЕТ 000priv 000priv HELLO HELLO";

function removeRepeatedWords(s) {
  var lastWord = '';
  return s.replace(/([^\s]+)(\s|$)/g, function(all, w, e) {
    return lastWord == w && !/[а-яА-ЯA-Z0-9]/gi.test(w) ? '' : (lastWord = w) + e;
  }).replace(/\s+/g, " ");
}

console.log(removeRepeatedWords(a));
