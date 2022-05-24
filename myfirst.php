<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PHP" />
    <meta name="keywords" content="HTML5, PHP" />
    <meta name="author" content="Qinthara Lianputri"  />
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        $marks = array (85, 85, 95); //declare and initialize array
        $marks[1] = 90; //modify second element
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3; //compute average
        if($ave >= 50)
            $status = "PASSED";
        else
            $status = "FAILED";
        echo "<p>The average score is $ave. You $status</p>";
    ?>
</body>
</html>