function myFunc() {
  // ... some code ...
  return $value;
}

// ... later in the code ...

if (myFunc() === null) {
  // Handle null case
} elseif (myFunc() === false) {
  // Handle false case
} else {
  // Handle other cases
}