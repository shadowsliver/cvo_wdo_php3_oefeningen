<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return "
    <h2>Upload new jpg-image</h2>
    <form method='post' action='index.php?page=upload' enctype='multipart/form-data'>
        <label>Find a jpeg/png image to upload</label>
        <input type='file' name='image-data' accept='image/jpeg, image/png'>
        <input type='submit' value'Upload' name='new-image'>
    </form>
    ";

