<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

if(isset($_POST['submit']))
{
    $ProductID = $_POST["ProductID"];
    $ProductName = $_POST["ProductName"];
    $Product_Description = $_POST["Product_Description"];


    $sql = "insert into products (Product_ID,Product_Name,Product_Description) values ('$ProductID','$ProductName','$Product_Description')";

    if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Product_table.php");</script>';
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
    <title>Product Form</title>
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
        <h2>Product Information</h2>
                <form action="Product_Form.php" method="post">

                <label for="ProductID">Product ID</label>
                <input type="text" id="ProductID" name="ProductID" placeholder="P_001" required>

                <label for="ProductName">Product Name</label>
                <input type="text" id="ProductName" name="ProductName" required>

                <label for="Product_Description">Product Description</label>
                <input type="text" id="Product_Description" name="Product_Description" required><br>

                <input type="submit" value="submit" name="submit">
            <a href="Product_table.php">
                <button type="button">Back</button>
            </a>
        </form>
    </div>
</body>
</html>
