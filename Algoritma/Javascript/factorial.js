function factorial(n) {
  if (n < 0) {
    return 'Invalid input'
  }
  if (n === 0 || n === 1) {
    return 1
  }

  let result = 1
  for (let i = 2; i <= n; i++) {
    result *= i
  }
  return result
}

// Contoh penggunaan
const N = 3
console.log(`Faktorial dari ${N} adalah ${factorial(N)}`)
