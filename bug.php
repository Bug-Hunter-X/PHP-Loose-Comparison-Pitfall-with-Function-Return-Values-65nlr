function myFunc() {
  // ... some code ...
  return $value;
}

// ... later in the code ...

if (myFunc() === null) {
  // Handle null case
} else if (myFunc() === false) {
  // Handle false case
}