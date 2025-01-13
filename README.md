# Brute Force Password Cracker in PHP

This is a simple brute-force password cracker implemented in PHP. It generates and tests all possible password combinations based on a predefined character set, attempting to crack a given password. Performance metrics, including the number of attempts and the time taken to crack the password, are tracked and displayed.

## Features

- **Brute-Force Algorithm**: The script uses a brute-force method to try all possible combinations of characters.
- **Performance Tracking**: It tracks the time taken to crack the password and the number of attempts made.
- **Customizable Character Set**: The character set used for the brute-force attempt can be modified (by default, it includes uppercase, lowercase letters, and numbers).
- **Predefined Password**: The target password to crack is predefined in the script (no user input needed).

## Requirements

- PHP 7.0 or higher

## How to Use

1. Clone or download this repository.
2. Modify the `$targetPassword` variable in the script to the password you want to crack.
3. Run the script using the PHP command-line interface (CLI):

   ```bash
   php brute_force_cracker.php
   ```

4. The script will output the cracked password (if found), the number of attempts made, and the time taken.

## Example Output

```bash
Password cracked successfully: abc
Attempts: 18278
Time taken: 0.3047 seconds
```

## Code Explanation

- **`$targetPassword`**: The password you want to crack. Modify this variable to test with different passwords.
- **Character Set**: The script uses the following default character set:
  - Lowercase letters: `a-z`
  - Uppercase letters: `A-Z`
  - Numbers: `0-9`
  
  You can customize this set by modifying the `$characterSet` variable in the code.
  
- **`generateAndTest()`**: A recursive function that generates all possible combinations of characters up to the length of the target password and compares them to the target password.
  
- **Performance Metrics**: The script measures the time taken to crack the password using `microtime(true)` and tracks the number of attempts made during the brute-force process.

## Limitations

- The brute-force approach can be extremely slow, especially for long passwords or large character sets.
- This script is intended for educational purposes and should not be used for illegal activities.

## License

This project is open-source and licensed under the MIT License.

## Acknowledgments

- This script was developed as an educational example to demonstrate brute-force password cracking.
- No malicious intent or real-world password cracking is intended with this tool.

