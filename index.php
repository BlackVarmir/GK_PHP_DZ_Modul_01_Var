<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php
            $tag = isset($_GET['tag']) ? $_GET['tag'] : 'div';
            $background_color = isset($_GET['background_color']) ? $_GET['background_color'] : 'blue';
            $color = isset($_GET['color']) ? $_GET['color'] : 'red';
            $width = isset($_GET['width']) ? $_GET['width'] : '200px';
            $height = isset($_GET['height']) ? $_GET['height'] : '200px';

            // Виведення стилів на основі змінних
                echo "$tag {
                background-color: $background_color;
                color: $color;
                width: $width;
                height: $height;
                padding: 20px;
                margin: 10px;
                }";
                ?>
    </style>
</head>
<body>

<?php
$name = 'Oleksandr';
$age = 16;
$num1 = rand(1, 20);
$num2 = rand(1, 20);
$rez = $num1 + $num2;
?>

<p>Hello! My name is <?= $name ?></p>
<p>I’m <?= $age ?></p>
<p><?= $num1 ?> + <?= $num2 ?> = <?= $rez ?></p>

<?php
$num1 = $num1 ^ $num2;
$num2 = $num1 ^ $num2;
$num1 = $num1 ^ $num2;
?>

<p><?= $num1 ?> + <?= $num2 ?> = <?= $rez ?></p>

<h3>Тести</h3>

<h4>a) Питання з одним правильним варіантом відповіді:</h4>
<form>
    <p>1. Яка столиця Франції?</p>
    <input type="radio" name="q1" value="Париж"> Париж<br>
    <input type="radio" name="q1" value="Берлін"> Берлін<br>
    <input type="radio" name="q1" value="Лондон"> Лондон<br>
    <input type="radio" name="q1" value="Рим"> Рим<br>
</form>

<h4>b) Питання з кількома правильними варіантами відповіді:</h4>
<form>
    <p>2. Які з цих кольорів є основними?</p>
    <label for="red">
        <input type="checkbox" id="red" name="q2[]" value="Червоний"> Червоний
    </label><br>
    <label for="green">
        <input type="checkbox" id="green" name="q2[]" value="Зелений"> Зелений
    </label><br>
    <label for="blue">
        <input type="checkbox" id="blue" name="q2[]" value="Синій"> Синій
    </label><br>
    <label for="yellow">
        <input type="checkbox" id="yellow" name="q2[]" value="Жовтий"> Жовтий
    </label><br>
</form>



<h4>c) Питання з розгорнутою відповіддю:</h4>
<p>3. Опишіть принцип роботи сонячної енергії.</p>
<textarea rows="4" cols="50"></textarea>

<h3>Змінні стилі для тегів</h3>

<p>Тег, записаний у змінній tag зі стилями, які записані у змінних:</p>
<?php
// Виведення тегу зі стилізацією
echo "<$tag>Це приклад вмісту тегу $tag</$tag>";
?>
</body>
</html>