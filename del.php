<?php
$folderPath = 'upload'; // Replace with the actual folder path

// Check if a file delete request has been made
if (isset($_GET['delete'])) {
    $fileName = $_GET['delete'];
    $filePath = $folderPath . '/' . $fileName;
    
    // Check if the file exists before deleting
    if (file_exists($filePath)) {
        unlink($filePath);
        echo "File '$fileName' has been deleted successfully.";
    } else {
        echo "File '$fileName' does not exist.";
    }
}

// Get all file names in the folder
$fileNames = scandir($folderPath);
$fileNames = array_diff($fileNames, ['.', '..']); // Remove "." and ".." from the list

// Display the file names and create delete links
foreach ($fileNames as $fileName) {
    echo "<p>$fileName <a href='?delete=$fileName'>Delete</a></p>";
}
?>