<?php

$filename = $_FILES['file']['name'];
$location = "image/" . $filename;
$uploadOk = 1;
$imageFileType = pathinfo($location, PATHINFO_EXTENSION);
$valid_extensions = array("jpg", "jpeg", "png");
if (!in_array(strtolower($imageFileType), $valid_extensions)) {
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo 0;
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
        echo $location;
    } else {
        echo 0;
    }
}