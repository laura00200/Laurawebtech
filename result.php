<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    // Use the filename as needed in your webpage
    echo "Uploaded File: " . $filename;
} else {
    // Handle the case when the filename is not provided
    echo "No file uploaded.";
}
?>
