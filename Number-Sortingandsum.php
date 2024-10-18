<!DOCTYPE html>
<html>
<head>
    <title>Number Sorting and Sum</title>
</head>
<body>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="number<?php echo $i; ?>">Enter number <?php echo $i; ?>:</label>
            <input type="number" id="number<?php echo $i; ?>" name="numbers[]" step="any" required><br><br>
<?php endfor; ?>
<input type="submit"value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $numbers =$_POST['numbers'];

    sort($numbers);

    $total_sum=array_sum($numbers);

    echo "<h2>Numbers in ascending order:</h2>";
    echo "<p>".implode(", ", $numbers)."</p>";
    echo "<h2>Sum of all numbers:</h2>";
    echo "<p>".$total_sum."</p>";
}
?>
</body>
</html>