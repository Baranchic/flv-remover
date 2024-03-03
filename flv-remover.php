<?php
$folderPath = '/etc/rtmp/html/user-rec/';

// Get all .flv files in the folder
$flvFiles = glob($folderPath . '*.flv');

// Delete each .flv file
foreach ($flvFiles as $file) {
    unlink($file);
}
?>
