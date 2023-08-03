<?php
require_once 'FileOrganizer.php';

// Command line arguments for source and destination directories
$source_directory = $argv[1];
$destination_directory = $argv[2];

// Create a new FileOrganizer instance and organize the files
$fileOrganizer = new FileOrganizer($source_directory, $destination_directory);
$fileOrganizer->organizeFiles();

