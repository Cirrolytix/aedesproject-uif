# Initialization

## Overview

This section covers the utility function to set up the project structure required by the aedesproject-uif Python package to work properly in the user's current working directory. 

---

## setup_project_structure

### Description

This function sets up the project structure by downloading and extracting certain directories from the aedesproject-uif GitHub repository.  There will be **model** and **processed** directories, which will be empty, and a **data** directory, which will only contain the **INFORM_DF_Variables.csv** file.

### Function Name

`setup_project_structure(destination_path)`

### Parameters

- `destination_path`: The path where the project structure will be set up.

### Usage

```python
from aedesproject_uif import setup_project_structure
setup_project_structure("C:\USERS\USER123\Documents\aedes")
```

