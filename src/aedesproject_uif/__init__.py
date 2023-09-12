import requests
import zipfile
import io
import os

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
            # Create model and processed directories without their contents
            if file_info.filename in ["aedesproject-uif-master/model/", "aedesproject-uif-master/processed/"]:
                os.makedirs(os.path.join(destination_path, file_info.filename), exist_ok=True)
            
            # Extract only the INFORM_DF_Variables.csv file from the data directory
            elif file_info.filename == "aedesproject-uif-master/data/INFORM_DF_Variables.csv":
                z.extract(file_info, destination_path)

    print(f"Project structure set up at {destination_path}")
