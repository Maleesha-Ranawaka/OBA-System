<?php
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = "";
    if(isset($_POST['submit'])){
        // Include the database configuration file
       
        
        // File upload configuration
        $targetDir = "../img/gallery/";
        $allowTypes = array('jpg','png','jpeg','gif');
        
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = "";
        
        if(!empty(array_filter($_FILES['files']['name']))){
            foreach($_FILES['files']['name'] as $key=>$val){
                // File upload path
                $fileName = basename($_FILES['files']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;
                
                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                if(in_array($fileType, $allowTypes)){
                    // Upload file to server
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                        // Image db insert sql
                        $statusMsg = "Files are uploaded successfully.".$errorMsg;
                        //$insertValuesSQL .= "('".$fileName."', NOW()),";
                    }else{
                        $errorUpload .= $_FILES['files']['name'][$key].', ';
                    }
                }else{
                    $errorUploadType .= $_FILES['files']['name'][$key].', ';
                }
            }
            
            // if(!empty($insertValuesSQL)){
            //     $insertValuesSQL = trim($insertValuesSQL,',');
            //     // Insert image file name into database
            //     $insert = $dbConnection->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL");
            //     if($insert){
            //         $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
            //         $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
            //         $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
            //         $statusMsg = "Files are uploaded successfully.".$errorMsg;
            //     }else{
            //         $statusMsg = "Sorry, there was an error uploading your file.";
            //     }
            // }
        }else{
            $statusMsg = 'Please select a file to upload.';
            header("Location:gallery.php");
        }
   }
?>