<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Checkbox Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label><input type="checkbox" name="options[]" value="Option 1"> Option 1</label><br>
        <label><input type="checkbox" name="options[]" value="Option 2"> Option 2</label><br>
        <label><input type="checkbox" name="options[]" value="Option 3"> Option 3</label><br>
        <label><input type="checkbox" name="options[]" value="Option 4"> Option 4</label><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['options'])) {
        $selected_options = $_POST['options'];
        $options_string = implode(", ", $selected_options);
        echo "You selected: " . $options_string;
    }
    else
    {
        echo "No options were selected.";
    }
}
else
{
    echo "Invalid request method.";
}
?>