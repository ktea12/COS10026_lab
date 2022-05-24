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
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
        $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); //declare and initialize array
        echo "<p>The days of the week in English are: ";
            for ($i = 0; $i < count($days); $i++)
                echo "$days[$i], ";
        echo "</p>";

        $days = array ("Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are: ";
            for ($i = 0; $i < count($days); $i++)
                echo "$days[$i], ";
        echo "</p>";
    ?>
    
</body>
</html>