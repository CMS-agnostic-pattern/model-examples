<?php
// anonymous function that check the value of the field
// and return true if the value is valid, and false if the value is invalid

return function($value) {
  if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_-]*$/', $value)) {
    return true;
  }
  return false;
};