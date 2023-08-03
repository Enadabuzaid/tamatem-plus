<?php
class FileOrganizer {
    protected $source_directory;
    protected $destination_directory;

    public function __construct($source_directory, $destination_directory) {
        $this->source_directory = rtrim($source_directory, '/') . '/';
        $this->destination_directory = rtrim($destination_directory, '/') . '/';
    }

    public function organizeFiles() {
        $files = glob($this->source_directory . "*.txt");

        foreach ($files as $file) {
            $path_parts = pathinfo($file);
            $filename = $path_parts['filename'];
            $language = strstr($filename, '-', true);

            $sub_dir = $this->destination_directory . '/' . $language;
            if (!file_exists($sub_dir)) {
                mkdir($sub_dir, 0777, true);
            }

            // Copy the file into the corresponding sub-directory
            copy($file, $sub_dir . '/' . $path_parts['basename']);
        }
    }
}
