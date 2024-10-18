<html lang="en">
<head>
    <title>Shuffle Array</title>
</head>
<body>
    <form method="POST">
        <input type="hidden" name="shuffle" value="1">
        <button type="submit">Shuffle</button>
    </form>

    <div id="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['shuffle'])) {
            $array = ['Apple', 'Banana', 'Cherry', 'Dragonfruit',  'Fig', 'Elderberry', 'Grape'];

            shuffle($array);

            echo '<ul>';
            foreach ($array as $value) {
                echo '<li>' . htmlspecialchars($value) . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>