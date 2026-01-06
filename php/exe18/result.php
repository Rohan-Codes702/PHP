<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $errors = [];

        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];

        // Get file extension safely
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed_extensions = ["jpg", "jpeg", "png", "webp"];

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Extension not allowed. Only jpg, jpeg, png, webp are allowed.";
        }

        if ($file_size > 2097152) { // 2 MB
            $errors[] = "File size must be 2 MB or less.";
        }

        if (empty($errors)) {
            $new_name = uniqid() . "." . $file_ext;

            // Make sure this folder exists
            $destination = "img/" . $new_name;

            if (!is_dir('img')) {
                mkdir('img', 0755, true); // create folder if missing
            }

            if (move_uploaded_file($file_tmp, $destination)) {
                echo "<p style='color:green'>Upload successful!</p>";
                echo "<p>File saved as: <strong>$new_name</strong></p>";
                echo "<img src='$destination' alt='Uploaded Image' style='max-width:300px;'>";
            } else {
                echo "<p style='color:red'>Upload failed.</p>";
            }
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red'>$error</p>";
            }
        }

    } else {
        echo "<p style='color:red'>No file selected or there was an upload error.</p>";
    }

} else {
    echo "<p style='color:red'>Invalid request.</p>";
}
?>
