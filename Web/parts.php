<?php
if(!empty($_POST)){
$errors = "";
$partID = $_POST['part_id'];
$vendorID = $_POST['vendor_number'];
$description = $_POST['description'];
$onHand = $_POST['on_hand'];
$onOrder = $_POST['on_order'];
$cost = $_POST['cost'];
$listPrice = $_POST['list_price'];

if (empty($partID) || ! is_numeric($partID)) {

    $errors .= "Please enter a valid part ID in numeric format.<br>";
}


if (empty($vendorID) || ! is_numeric($vendorID)) {
    $errors .= "Please enter a valid vendor ID in numeric format. <br> ";
}

if (empty($description)) {
    $errors .= "Please enter a part description.<br>";
}

if (empty($onHand) || ! is_numeric($onHand)) {
    $errors .= "Please enter the number of parts on hand.<br>";
}

if (empty($onOrder) || ! is_numeric($onOrder)) {
    $errors .= "Please enter the number of parts on order.<br>";
}

if (empty($cost) || ! is_numeric($cost)) {
    $errors .= "Please enter the part's cost.<br>";
}

if (empty($listPrice) || is_numeric($listPrice)) {
    $errors .= "Please enter the part's list price.<br>";
}

if($listPrice <= $cost){
    $errors.= "The list price cannot be zero or less than the cost.";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parts</title>
    <link rel="stylesheet" href="assignment4.css" />
</head>

<body>
    <h1>PARTS</h1>

    <form name="part_form" method="POST" onsubmit="return formSubmit()" action="">

        <label> Part ID:</label>
        <input type="text" name="part_id"><br><br><br>

        <label>Vendor Number:</label>
        <input type="text" name="vendor_number"><br><br><br>

        <label>Description:</label>
        <input type="text" name="description"><br><br><br>

        <label>On Hand:</label>
        <input type="text" name="on_hand"><br><br><br>

        <label>On Order:</label>
        <input type="text" name="on_order"><br><br><br>

        <label>Cost: </label>
        $<input type="text" name="cost"><br><br><br>

        <label>List Price: </label>
        $<input type="text" name="list_price"><br><br><br>
        <input type="submit" value="Submit" style="width: 50%; height: 50px; font-size: 25px">
    </form>

    <div id=errorOutput>
    <?php if (!empty($errors)) {

        echo $errors;
    }
    ?>
    </div>
</body>

</html>