import requests
import zipfile
import io
import os

import requests
import zipfile
import io
import os
import shutil

def setup_project_structure(destination_path):
    """
    Download and extract the model, processed, and data directories 
    from the GitHub repository to the specified destination path.
    Only the INFORM_DF_Variables.csv file will be retained in the data directory.
    """
    
    # URL to the master branch zip archive of your repository
    repo_url = "https://github.com/cirrolytix/aedesproject-uif/archive/refs/heads/master.zip"
    
    response = requests.get(repo_url)
    with zipfile.ZipFile(io.BytesIO(response.content)) as z:
        for file_info in z.infolist():
            # Check if the file is in one of the desired directories
            if file_info.filename.startswith("aedesproject-uif-main/model/") or \
               file_info.filename.startswith("aedesproject-uif-main/processed/") or \
               file_info.filename == "aedesproject-uif-main/data/INFORM_DF_Variables.csv":
                
                # Remove the 'aedesproject-uif-main/' prefix from the filename
                new_filename = file_info.filename.replace("aedesproject-uif-main/", "")
                target_path = os.path.join(destination_path, new_filename)
                
                # If it's a directory, just create it and continue to the next item
                if target_path.endswith('/'):
                    os.makedirs(target_path, exist_ok=True)
                    continue
                
                # Create necessary directories for the target path
                os.makedirs(os.path.dirname(target_path), exist_ok=True)
                
                # Extract the file to the target path
                with z.open(file_info) as source, open(target_path, "wb") as target:
                    shutil.copyfileobj(source, target)

    print(f"Project structure set up at {destination_path}")
