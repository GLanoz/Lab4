<!DOCTYPE html>
<html>

<head>
    <title>Форма з персональной інформацією</title>
</head>

<body>
    <h2>Персональна інформація</h2>
    <form method="get" action="process_form.php">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="age">Вік:</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="gender">Стать:</label>
        <select id="gender" name="gender">
            <option value="">Оберіть стать</option>
            <option value="male">Чоловік</option>
            <option value="female">Жінка</option>
            <option value="other">Інша</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="bio">Коротка біографія:</label>
        <textarea id="bio" name="bio"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

