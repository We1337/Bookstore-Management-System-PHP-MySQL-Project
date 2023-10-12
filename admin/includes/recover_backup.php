<?php
    // MySQL database connection parameters
    $host = 'localhost';        // MySQL host (usually 'localhost')
    $username = 'root';         // MySQL username
    $password = 'DedSec44678@'; // MySQL password
    $database = 'bookstoredatabase'; // Database name

    // Backup file to restore from
    $backupFile = "backup/" . $_GET['file'];

    // Execute the mysql command to restore the database
    $command = "mysql -h " . escapeshellarg($host) . " -u " . escapeshellarg($username) . " -p" . escapeshellarg($password) . " " . escapeshellarg($database) . " < " . escapeshellarg($backupFile);

    // Execute the command
    exec($command, $output, $returnCode);

    // Check if the restore was successful
    if ($returnCode === 0) 
    {
        header("location: ../backup_panel.php?good");
        exit();
    }
    
    header("location: ../backup_panel.php");
    exit();
?>
