<?php

// Try and find the appropriate DNS associated with this URL.
$url = "stats.dev.chip.test";

try {
    $ip_address = gethostbyname($url);
    echo "The IP address of " . $url . " is: " . $ip_address;
} catch (Exception $e) {
    echo "Failed to perform DNS lookup: " . $e->getMessage();
}
