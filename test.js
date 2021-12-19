// const result = [...Array(50)].map((_, index) => (2 * index) + 1).reduce((val1, val2) => val1 + val2)

// console.log(result);

// const result = [...Array(10)].map((_,index) => index + 1).reduce((carry, val) => carry * val);

// console.log(result);

// const factorial = (num) => {
//   return [...Array(num)].map((_,index) => index + 1).reduce((carry, val) => carry * val);
// }

const factorial = (num) => {
  if(num < 1) {
    return 1
  }
  return num * factorial(num - 1)
}

console.log(factorial(5));

