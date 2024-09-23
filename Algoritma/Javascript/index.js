function getCentury(year) {
  if (year <= 0) {
    return 'Invalid year'
  }
  return Math.ceil(year / 100)
}

const year1 = 1905
console.log(`Abad dari tahun ${year1} adalah ${getCentury(year1)}`)
const year2 = 1700
console.log(`Abad dari tahun ${year2} adalah ${getCentury(year2)}`)
