<?php
function bruteForcePasswordCracker($targetPassword)
{
    $characterSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $characterSetLength = strlen($characterSet);
    $maxLength = strlen($targetPassword);
    $attempts = 0;

    // Start performance tracking
    $startTime = microtime(true);

    // Attempt to crack the password
    for ($length = 1; $length <= $maxLength; $length++) {
        $result = generateAndTest($characterSet, $targetPassword, '', $length, $attempts);
        if ($result !== false) {
            $endTime = microtime(true);
            $timeTaken = $endTime - $startTime;

            echo "Password cracked successfully: $result\n";
            echo "Attempts: $attempts\n";
            echo "Time taken: " . round($timeTaken, 4) . " seconds\n";
            return;
        }
    }

    echo "Failed to crack the password.\n";
}

// Recursive function to generate combinations and test
function generateAndTest($characterSet, $targetPassword, $currentAttempt, $maxLength, &$attempts)
{
    if (strlen($currentAttempt) == $maxLength) {
        $attempts++;
        if ($currentAttempt === $targetPassword) {
            return $currentAttempt;
        }
        return false;
    }

    for ($i = 0; $i < strlen($characterSet); $i++) {
        $result = generateAndTest($characterSet, $targetPassword, $currentAttempt . $characterSet[$i], $maxLength, $attempts);
        if ($result !== false) {
            return $result;
        }
    }

    return false;
}

// Predefined password
$targetPassword = "abc"; // Replace this with the password you want to crack

// Call the function with the predefined password
bruteForcePasswordCracker($targetPassword);
?>
