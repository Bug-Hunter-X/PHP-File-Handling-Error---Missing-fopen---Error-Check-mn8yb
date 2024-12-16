# PHP File Handling Bug: Missing fopen() Error Check

This repository demonstrates a common error in PHP file handling: failure to check the return value of `fopen()`.  The `fopen()` function can return `false` if the file doesn't exist, or if there's a problem accessing it (permissions, etc.).  Without proper error handling, your script may silently fail or throw an error later.

The `bug.php` file shows the incorrect code, and `bugSolution.php` provides the correct solution.

## How to Reproduce
1. Clone the repository.
2. Run `bug.php`. Note that it will not handle the error if `nonexistent_file.txt` does not exist.
3. Run `bugSolution.php`. Observe that it handles the error gracefully.

## Solution
Always check the return value of `fopen()` before attempting to use the file handle.  Proper error handling ensures your script's robustness.