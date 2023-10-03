<?php
    // MySQL database connection parameters
    $host = 'localhost';        // MySQL host (usually 'localhost')
    $username = 'root';         // MySQL username
    $password = 'DedSec44678@'; // MySQL password
    $database = 'bookstoredatabase'; // Database name

    // Backup file to restore from
    $backupFile = 'backup/backup_2023-09-10_16-56-54.sql'; // Adjust the filename and path accordingly

    // Execute the mysql command to restore the database
    $command = "mysql -h $host -u $username -p$password $database < $backupFile";

    // Execute the command
    exec($command, $output, $returnCode);

    // Check if the restore was successful
    if ($returnCode === 0) 
    {
        echo "Database restore completed successfully.";
        header("location:/admin/panel.php?restoreSuccessfully");
    } 
    else 
    {
        echo "Database restore failed. Error: " . implode("\n", $output);
        header("location:/admin/panel.php?restoreFailed");
    }
?>
