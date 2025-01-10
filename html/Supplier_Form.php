<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

if(isset($_POST['submit']))
{
    $supplierId = $_POST["SupplierID"];
    $supplierName = $_POST["SupplierName"];
    $supplierContact = $_POST["SupplierContact"];


    $sql = "insert into supplier (Supplier_ID,Supplier_Name,Supplier_Contact) values ('$supplierId','$supplierName','$supplierContact')";

    if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Supplier_table.php");</script>';
    }
    else
    {
        echo "Something went wrong: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-container h2{
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="tel"]{
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]{
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Supplier Information</h2>
                <form action="Supplier_Form.php" method="post">

                <label for="SupplierID">Supplier ID</label>
                <input type="text" id="SupplierID" name="SupplierID" placeholder="S_01" required>

                <label for="SupplierName">Supplier Name</label>
                <input type="text" id="SupplierName" name="SupplierName" required>

                <label for="SupplierContact">Supplier Contact</label>
                <input type="tel" id="SupplierContact" name="SupplierContact" required><br>

                <input type="submit" value="submit" name="submit">
            <a href="Supplier_table.php">
                <button type="button">Back</button>
            </a>
        </form>
    </div>
</body>
</html>
