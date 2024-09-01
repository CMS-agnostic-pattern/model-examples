// anonymous function that check the value of the field
// and return true if the value is valid, and false if the value is invalid

module.exports = function(value) {
  if (/^[a-zA-Z_][a-zA-Z0-9_-]*$/.test(value)) {
    return true;
  }
  return false;
}