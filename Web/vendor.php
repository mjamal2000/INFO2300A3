<?php
if(!empty($_POST)){
    $errors="";
    $vendorNumber = $_POST['vendor_number'];
    $vendorName = $_POST['vendor_name'];
    $addressOne = $_POST['address_one'];
    $addressTwo = $_POST['address_two'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalCode = $_POST['postal_code'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];

    if(empty($vendorNumber)|| !is_numeric($vendorNumber)){
        $errors.="Please enter a valid vendor number in numeric format";
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
    <h1>VENDORS</h1>

    <form name="part_form" method="POST" onsubmit="return formSubmit()" action="">

        <label> Vendor Number:</label>
        <input type="text" name="vendor_number"><br><br>

        <label>Vendor Name:</label>
        <input type="text" name="vendor_name"><br><br>

        <label>Address 1:</label>
        <input type="text" name="address_one"><br><br>

        <label>Address 2:</label>
        <input type="text" name="address_two"><br><br>

        <label>City:</label>
        <input type="text" name="city"><br><br>

        <label>Province: </label>
        <select name="province">
            <option value="Ontario">Ontario</option>
            <option value="Quebec">Quebec</option>
            <option value="Alberta">Alberta</option>
        </select><br><br><br>

        <label>Postal Code: </label>
        <input type="text" placeholder="X9X 9X9" name="postal_code"><br><br>

        <label>Country:</label>
        <input type="text" name="country"><br><br>

        <label>Phone:</label>
        <input type="text" placeholder="123-123-1234" name="phone"><br><br>

        <label>Fax:</label>
        <input type="text" name="fax"><br><br>

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