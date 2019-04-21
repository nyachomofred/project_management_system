if($_FILES['zip_file']['name'] !='' && $_FILES['pdf_file']['name'] !=''){
        $file_name=$_FILES['zip_file']['name'];
        $array_documentation=explode(".",$documentation);
        $array_filename=explode(".",$file_name);
        $documentation_name=$array_documentation[0];
        $documentation_ext=$array_documentation[1];
        $zip_name=$array_filename[0];
        $zip_ext=$array_filename[1];
        
        //checking if upload is zip file and documentation is pdf 
        if($documentation_ext== 'pdf' && $zip_ext=='zip'){
            $path='uploads/';
            $documentation_path='documentations/';
            $location=$path.basename($file_name);
            $document_location=$document_path.$documentation_name;
            //move the uploaded file and documentationin respective flders
            if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location)){
             echo "success";
            }
        }else{echo'<script>window.alert("choose zip file and pdf file")</script>';}
    }