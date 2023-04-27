<form action="quiz.php" method="post">
    <p>1. Яка столиця України?</p>
    <input type="radio" name="q1" value="a"> a. Київ<br>
    <input type="radio" name="q1" value="b"> b. Париж<br>
    <input type="radio" name="q1" value="c"> c. Лондон<br>

    <p>2. Хто президент України?</p>
    <input type="radio" name="q2" value="a"> a. Барак Обама<br>
    <input type="radio" name="q2" value="b"> b. Джо Байден<br>
    <input type="radio" name="q2" value="c"> c. Володимир Зеленський<br>

    <p>3. Чий Крим?</p>
    <input type="radio" name="q3" value="a"> a. Греції<br>
    <input type="radio" name="q3" value="b"> b. України<br>
    <input type="radio" name="q3" value="c"> c. США<br>

    <br><br>

    <input type="submit" value="Submit">

    <?php
    // Define the correct answers
    $answers = array("a", "c", "b");

    // Initialize score
    $score = 0;

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check the answers
        if ($_POST["q1"] == $answers[0]) {
            $score++;
        }
        if ($_POST["q2"] == $answers[1]) {
            $score++;
        }
        if ($_POST["q3"] == $answers[2]) {
            $score++;
        }
    }

    // Display the score and correct answers
    echo "Ваш рахунок: " . $score . " з 3.<br><br>";
    echo "Правильні відповіді:<br>";
    echo "1. Київ<br>";
    echo "2. Володимир Зеленський<br>";
    echo "3. України";
    ?>


</form>