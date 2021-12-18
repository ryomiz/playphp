const result = [...Array(50)].map((_, index) => (2 * index) + 1).reduce((val1, val2) => val1 + val2)

console.log(result);