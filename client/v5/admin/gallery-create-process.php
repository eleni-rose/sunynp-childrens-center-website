<?php

    // Require config file for SQL later 
    require __DIR__ . "/config.php";

    // Our target directory is the CS server files folder (only safe location to host)
    $target_dir = "/var/www/projects/s23-04/html/files"."/";

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $filename = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions = array("jpeg","jpg","png","pdf","gif");
  
   if(isset($_POST["submit"])) {
  
        // To check extensions are correct or not
        if(in_array($imageFileType, $extensions) === true) {
            $uploadOk = 1;
        }
        else {
  
            echo "No file selected or invalid file extension. Please try again.";
            $uploadOk = 0;
            exit;
        }
    }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 10000000) {
  
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            exit;
        }
  
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
           echo "Sorry, your file was not uploaded.";
        }
        else
        {

            // If everything is ok, try to upload file
            if (move_uploaded_file($_FILES["fileToUpload"]
                  ["tmp_name"], $target_file))
            {
                echo "The file ".  $_FILES["fileToUpload"]
                  ["name"]. " has been uploaded.";
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $sql = "INSERT INTO gallery (filename)
                VALUES ('$filename')";
        
        $stmt = $mysqli->stmt_init();

        if (! $stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }
    
        if ($stmt->execute()) {
            header("Location: gallery-list.php");
            exit;
        } else {
            die($mysqli-->error . " ". $mysqli->errno);
        }
?>