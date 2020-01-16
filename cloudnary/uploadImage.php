<?php
require_once __DIR__.'\cloudinary-sdk\autoload.php';


\Cloudinary::config(array(
    "cloud_name" => "tgsextrty",
    "api_key" => "469598346515332",
    "api_secret" => "p2UlGv_Dqd7AyJK6M2n-Ap5PXjM"
));

if (isset($_POST["submit"])) {
    print_r($_FILES["fileToUpload"]);
    $options = array(
        "folder" => "boss_img/module_icon"
    );
    $cloudUpload = \Cloudinary\Uploader::upload($_FILES["fileToUpload"]['tmp_name'],$options);
    print_r($cloudUpload);
}

?>
<!DOCTYPE HTML>
  <html>
    <head>
  </head>

  <body>

<form method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

  </body>
</html>