<html>
<head>
    <title>Associative Array Lookup</title>
</head>
<body>
<?php
$associativeArray=
    ['A' => 'Apple',
    'B' => 'Banana',
    'C' => 'Cherry',
    'D' => 'Dragonfruit',
    'E' => 'Elderberry',
    'F' => 'Figs',
    'G' => 'Grape',
    'H' => 'Honeydew Melon',
    'I' => 'Ice apple',
    'J' => 'Jack Fruit',
    'K' => 'Kiwi',
    'L' => 'Lemon',
    'M' => 'Mango',
    'N' => 'Nance',
    'O' => ' Orange',
    'P' => 'Pomegranate',
    'Q' => 'Quandong Fruit',
    'R' => 'Rambutan',
    'S' => ' Strawberry',
    'T' => 'Tamarillo',
    'U' => 'Ugli fruit',
    'V' => 'Velvet apple',
    'W' => 'Watermelon',
    'X' => 'xigua',
    'Y' => 'Yellow Apple',
    'Z' => 'Zucchini',];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userInput = $_POST['userInput'];
if (array_key_exists($userInput, $associativeArray)){
    $result = "The value for '{$userInput}'is:".$associativeArray[$userInput];
}else{
    $result ="The key'{$userInput}'is not present in the array.";
}
}
?>
<form method="post" action="">
    Enter a key (A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z): <input type="text" name="userInput" required>
    <input type="submit" value="Submit">
</form>
<?php
if (isset($result)){
    echo "<p>$result</p>";
}
?>
</body>
</html>