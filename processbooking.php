<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="PHP" />
    <meta name="keywords" content="HTML5, PHP" />
    <meta name="author" content="Qinthara Lianputri"  />
    <title>Booking Confirmation</title>
</head>
<body>
<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php
    $firstname = sanitise_input($_POST["firstname"]);
    $lastname = sanitise_input($_POST["lastname"]);
    $species = sanitise_input($_POST["species"]);
    $age = sanitise_input($_POST["age"]);
    $food = sanitise_input($_POST["food"]);
    $partySize = sanitise_input($_POST["partySize"]);

    if (isset ($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    }
    else {
        header ("location: register.html");
    }

    if (isset ($_POST["lastname"]))
        $lastname = $_POST["lastname"];

    if (isset ($_POST["age"]))
        $age = $_POST["age"];

    if (isset ($_POST["food"]))
        $food = $_POST["food"];
    
    if (isset ($_POST["partySize"]))
        $partySize = $_POST["partySize"];

    if (isset ($_POST["species"])) {
        $species = $_POST["species"];
    }
    else {
        $species = "Unknown species"; 
    }

    $tour ="";
    if (isset ($_POST["1day"])) $tour = $tour. "One-day tour ";
    if (isset ($_POST["4day"])) $tour = $tour. "Four-day tour ";
    if (isset ($_POST["10day"])) $tour = $tour. "Ten-day tour ";

    $errMsg = "";
    if ($firstname == "") {
        $errMsg .= "<p> You must enter your first name. </p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        $errMsg .= "<p> Only alpha letters allowed in your first name. </p>";
    }
    
    $errMsg1 = "";
    if ($lastname == "") {
        $errMsg1 .= "<p> You must enter your last name. </p>";
    }
    else if (!preg_match("/^[a-zA-Z-]$/", $lastname)) {
        $errMsg1 .= "<p> Only alpha letters or a hyphen allowed in your last name. </p>";
    }

    $errMsg2 = "";
    if ($age == "") {
        $errMsg2 .= "<p> You must enter your age. </p>";
    }
    else if (!is_numeric($age)) {
        $errMsg2 .= "<p> Your age must be a number. </p>";
    }
    else if ($age < 10 || $age > 10000) {
        $errMsg2 .= "<p> Your age must be between 10 and 10,000. </p>";
    }

    if ($errMsg != "") {
        echo "<p>$errMsg<p>";
    }
    else {
    echo "<p>Welcome $firstname $lastname ! <br/>
    You are now booked on the $tour <br/> 
    Species: $species <br/>
    Age: $age <br/>
    Meal Preference: $food <br/>
    Number of travellers: $partySize</p>";
    }
?>
</body>
</html>