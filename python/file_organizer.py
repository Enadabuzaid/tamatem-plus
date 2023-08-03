import os
import sys
import shutil

class FileOrganizer:
    def __init__(self, source_directory, destination_directory):
        self.source_directory = source_directory
        self.destination_directory = destination_directory

    def organize_files(self):
        files = [f for f in os.listdir(self.source_directory) if f.endswith('.txt')]

        for file in files:
            language = file.split('-')[0]
            source_file_path = os.path.join(self.source_directory, file)
            destination_folder_path = os.path.join(self.destination_directory, language)

            if not os.path.exists(destination_folder_path):
                os.makedirs(destination_folder_path)

            destination_file_path = os.path.join(destination_folder_path, file)
            shutil.copyfile(source_file_path, destination_file_path)

if __name__ == '__main__':
    source_directory = sys.argv[1]
    destination_directory = sys.argv[2]

    file_organizer = FileOrganizer(source_directory, destination_directory)
    file_organizer.organize_files()
