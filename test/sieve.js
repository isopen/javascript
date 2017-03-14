"use strict";

// решето Эратосфена

var arr = [], n = 200;

for (var i = 2; i < n; i++) {
  arr[i] = true
}

var p = 2;
do {
  for (i = 2 * p; i < n; i += p) {
    arr[i] = false;
  }
  for (i = p + 1; i < n; i++) {
    if (arr[i]) break;
  }
  p = i;
} while (p * p < 200);

var sum = 0;
p = 1;
for (i = 0; i < arr.length; i++) {
  if (arr[i]) {
    sum += i * p;
    p++;
  }
}

console.log(sum);
