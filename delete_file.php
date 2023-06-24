<?php
$fileName = $_POST['fileName'];
$filePath = 'upload/' . $fileName;

if (file_exists($filePath)) {
    if (unlink($filePath)) {
        echo 'File deleted successfully.';
    } else {
        echo 'Error deleting file.';
    }
} else {
    echo 'File not found.';
}
?>
