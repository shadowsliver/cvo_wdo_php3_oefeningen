<?php
$newImageSubmitted = isset($_POST['new-image']);

if($newImageSubmitted){
    $output=upload();
} else {
    $output = include_once 'upload-form.php';
}

return $output;

function upload(){
    /*
    $output = "<pre>";
    $output .=print_r($_FILES,true);
    $output .= "</pre>";
    */
   include_once 'classes/Uploader.class.php';
   
   $uploader = new Uploader("image-data");
   $uploader->saveIn("images");
   $fileUploaded= $uploader->save();
   if($uploader){
       $output = "New file uploaded";
   } else {
       $output = "Something went wrong";
   }
   
   return $output;
}
