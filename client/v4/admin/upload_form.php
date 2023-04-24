<!DOCTYPE html>
<html>
  
<body>
  
    <form action="upload_process.php" method="post" 
          enctype="multipart/form-data">
        Directory<input type="text" name="dirname" 
                        id="dirname" size="100"><br>
        Select image to upload:
        <input type="file" name="fileToUpload" 
               id="fileToUpload"><br>
        <input type="submit" value="Upload Image" 
               name="submit">
    </form>
  
</body>
  
</html>