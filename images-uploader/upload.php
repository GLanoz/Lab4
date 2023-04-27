<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="imageUpload">Оберіть зображення:</label>
    <input type="file" name="imageUpload" id="imageUpload">
    <input type="submit" value="Завантажити зображення" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['imageUpload'];

    // Check for errors
    if ($file['error'] === 0) {
        // Check file type
        $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if ($fileType == "jpg" || $fileType == "png") {
            // Upload file to server
            $uploadDir = "uploads/";
            $uploadFile = $uploadDir . basename($file['name']);
            move_uploaded_file($file['tmp_name'], $uploadFile);

            // Display uploaded image
            echo "<img src='$uploadFile' alt='uploaded image'>";
        } else {
            echo "Такий тип файлу не підтримується. Будь-ласка завантажте PNG або JPEG формат.";
        }
    } else {
        echo "Помилка завантаження. Попробуйте ще раз.";
    }
}
?>