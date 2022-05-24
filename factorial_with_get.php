<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PHP" />
    <meta name="keywords" content="HTML5, PHP" />
    <meta name="author" content="Qinthara Lianputri"  />
    <title>Factorial Form</title>
</head>
<body>

<?php
    include ("mathfunctions.php");
?>
<h1>Factorial</h1>
<?php
    if(isset($_GET['number'])) {
        $num = $_GET['number'];
        if (isPositiveInteger($num)) {
            echo "<p>", $num, "! is ", factorial($num), ".</p>";
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }}
    echo "<p><a href='factorial.html'>Return to the Entry Page </a></p>";
?>
</body>
</html>