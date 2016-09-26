'use strict';

var arrow = require('./arrow');

let promise = new Promise((resolve, reject) => {
  // pending
  setTimeout(() => {
    reject(new Error("ошибка"));
  }, 1000);
  setTimeout(() => {
    resolve("успех");
  }, 998);
});
  
console.log(promise);
  
let func = () => {
  promise
    .then(
      result => {
        let a = new arrow('JavaScript');
        a.show();
      },
      error => console.log('Ошибка')
    );
};

setTimeout(func, 1000);