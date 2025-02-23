<?php

if(isset($_POST['btn'])) {
    if($_FILES['img_file']['type'] == "image/*") {
        if(!is_dir('../../public/uploads/posts')) {
            mkdir('../../public/uploads/posts');
        }
        $filename = uniqid() . "_" . $_FILES['f1']['name'];
        if(move_uploaded_file($_FILES['img_file']['tmp_name'], "../../public/uploads/posts" . $filename)) {
            return $filename;
        }
    } else {
        echo "please select a img file";
    }
}
