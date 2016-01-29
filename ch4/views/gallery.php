<?php

return showImages();

function showImages(){
    $output = "<h2>Image Gallery</h2>";
    $output .= "<ul id='images'>";
    $folder = "images";
    $filesInFolder = new DirectoryIterator($folder);
    while($filesInFolder->valid()){
        $file = $filesInFolder->current();
        $filename= $file->getFilename();
        $src= "$folder/$filename";
        $fileInfo = new Finfo(FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($src);
        if($mimeType === 'image/jpeg' or $mimeType === 'image/png'){
             $output .= "<li><img src='$src' /></li>";
        }
        $filesInFolder->next();
    }
   
    $output .= "</ul>";
    return $output;
}
