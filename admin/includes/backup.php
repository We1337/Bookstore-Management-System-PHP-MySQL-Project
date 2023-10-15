<?php
    // MySQL database connection parameters
    $host = 'localhost';        // MySQL host (usually 'localhost')
    $username = 'root'; // MySQL username
    $password = 'DedSec44678@'; // MySQL password
    $database = 'bookstoredatabase'; // Database name

    // Backup file name (optional)
    $backupFileName = 'backup_' . date('Y-m-d_H-i-s') . '.sql';

    // Execute mysqldump command to create a backup
    $command = "mysqldump -h $host -u $username -p$password $database > $backupFileName";
    $move = "mv $backupFileName backup";

    // Execute the command
    exec($command, $output, $returnCode);
    exec($move);

    // Check if the backup was successful
    if ($returnCode === 0) 
    {
        header("location: ../backup_panel.php");
        exit();
    } 

    header("location: ../backup_panel.php");
    exit();
?>
