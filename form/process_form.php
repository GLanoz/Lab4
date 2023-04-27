<!DOCTYPE html>
<html>

<head>
    <title>Надана особиста інформація</title>
</head>

<body>
    <h2>Надана особиста інформація</h2>
    <?php
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
    $gender = filter_input(INPUT_GET, 'gender', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    $bio = filter_input(INPUT_GET, 'bio', FILTER_SANITIZE_STRING);

    if ($name && $age && $gender && $email && $bio) {
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Bio: $bio</p>";
    } else {
        echo "<p>Невірний ввід. Попробуйте ще раз.</p>";
    }
    ?>
</body>

</html>