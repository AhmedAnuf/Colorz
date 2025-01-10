<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

if(isset($_POST['submit'])){
    
    $quoteID = $_POST["quoteID"];
    $date = $_POST["date"];
    $salesAgentID = $_POST["salesAgentID"];
    $leadID = $_POST["leadID"];
    $products = $_POST['products'];


    $sql = "insert into quote (Quote_ID,Date,Sales_Agent_ID,Lead_ID,Products) values ('$quoteID ','$date','$salesAgentID','$leadID','$products')";

    if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Quotations_table.php");</script>';
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
    <title>Quote Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container h2{
            text-align: center;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"]{
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
        <h2>Quoations Form</form></h2>
        <form action="Quotations_Form.php" method="post">

                <label for="quoteID">Quote ID</label>
                <input type="text" id="quoteID" name="quoteID" placeholder="Q_1001" required>


                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>


                <label for="agentID">Agent ID</label>
                <input type="text" id="agentID" name="salesAgentID" placeholder="Agent_001" required>

                <label for="leadID">Lead ID</label>
                <input type="tel" id="leadID" name="leadID" required>
                <label for="products">Products</label>
                <input type="text" id="products" name="products" required><br>

                <input type="submit" value="submit" name="submit">
            <a href="Quotations_table.php">
                <button type="button">Back</button>
            </a>
        </form>
    </div>

</body>
</html>
