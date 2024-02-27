<?php
    $filepath = "./user/log.txt";  // Assuming log.txt is in the same directory as the PHP file

    if (file_exists($filepath)) {
        unlink($filepath);  // Delete the file
        echo "log.txt deleted successfully.";
    } else {
        echo "Dashboard Cleared.";
    }
?>
