<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
        if ($file['error'] == 0) {
            $target_dir = "img/";
            $target_file = $target_dir . basename($file["name"]);
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo "Image uploaded successfully.<br>";
                echo "<img src='$target_file' alt='Uploaded Image' style='max-width: 300px;'><br><br>";
            } else {
                echo "Error uploading image.<br><br>";
            }
        } else {
            echo "Error: " . $file['error'] . "<br><br>";
        }
    } else {
        echo "No image uploaded.<br><br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*" required><br><br>
    <input type="submit" value="Upload">
</form>

</body>
</html>
