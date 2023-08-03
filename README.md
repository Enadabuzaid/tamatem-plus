# Tamatem task : 


## File Organizer

This repository contains the solution for a task given by Tamatem to organize text files based on their language. The files are assumed to be in a specific format, namely `language-number.txt`.

This solution is implemented using both PHP and Python, each having its own directory in this repository.

## Directory Structure

The directory structure is as follows:


- tamatem 
  - php (PHP solution)
    - Dockerfile 
    - file_organizer.php 
    - FileOrganizer.php
  - python (Python solution)
    - Dockerfile 
    - file_organizer.py
    - FileOrganizer.py 
  - files (source files)
      arabic-1.txt
      arabic-2.txt
      ...


## Setup using Docker

### PHP

1. Clone this repository and navigate into the `php` directory.

2. Build the Docker image:

    ```
    docker build -t file-organizer-php .
    ```

3. Run the Docker image:
    ```
   docker run --rm -v $(pwd)/../files:/source:ro -v $(pwd)/../new_files_php:/destination file-organizer-php
   ```
if you want Replace ```$(pwd)/../files and $(pwd)/../new_files_php``` with the absolute paths to the source and destination directories on your host machine if you are not running the command from the php directory.

### Python
1. Clone this repository and navigate into the `python` directory.

2. Build the Docker image:

    ```
    docker build -t file-organizer-php .
    ```
   
3. Run the Docker image:
    ```
    docker run --rm -v $(pwd)/../files:/source:ro -v $(pwd)/../new_files_python:/destination file-organizer-python 
    ```
    


## Setup Without Docker

### PHP
```
php file_organizer.php path/to/source/directory path/to/destination/directory
```

### Python
```
python file_organizer.py path/to/source/directory path/to/destination/directory
```

or

```
python3 file_organizer.py path/to/source/directory path/to/destination/directory
```

### Notes
The Docker container mounts the source directory as read-only, which means the original files are not modified.

The PHP script reads the files in the source directory and organizes them into language-specific subdirectories in the destination directory.


