'use strict';

var arrow = require('./arrow');

let promise = new Promise((resolve, reject) => {
  // pending
  setTimeout(() => {
    reject(new Error("Ошибка"));
  }, 1000);
  setTimeout(() => {
    resolve("Успех");
  }, 998);
});
  
console.log(promise);
  
let func = () => {
  promise
    .then(
      result => {
        let a = new arrow('JavaScript');
        a.show();
        console.log(result)
      },
      error => console.log(error.message)
    );
};

setTimeout(func, 1000);