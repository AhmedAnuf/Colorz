<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "colorz");

if(isset($_POST['submit']))
{
    $salesAgentName = $_POST["salesAgentName"];
    $salesAgentID = $_POST["salesAgentID"];
    $salesLead = $_POST["salesLead"];
    $quoteID = $_POST["quoteID"];
    $warehouse = $_POST["warehouse"];
    $supplier = $_POST["supplier"];


    $sql = "insert into sales (Sales_Agent_Name,Sales_Agent_ID,Sales_Lead,Quote_ID,Warehouse_Details,Supplier_ID) values ('$salesAgentName','$salesAgentID','$salesLead','$quoteID','$warehouse','$supplier')";

    if(mysqli_query($connection, $sql))
    {
        echo '<script>location.replace("Sales_table.php");</script>';
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
    <title>Sales Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container {
            max-width: 500px;
            justify-content: center;
            align-items:center;
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
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 10px;
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
        <h2>ColorZ Sales Data Entry</h2>
        <form action="Sales_Form.php" method="post">
                <label for="salesAgentName">Sales Agent Name</label>
                <input type="text" id="salesAgentName" name="salesAgentName" required>
            
                <label for="salesAgentID">Sales Agent ID</label>
                <select id="salesAgentID" name="salesAgentID" required>
                    <option value="Agent_001">Agent_001</option>
                    <option value="Agent_002">Agent_002</option>
                    <option value="Agent_003">Agent_003</option>
                    <option value="Agent_004">Agent_004</option>
                    <option value="Agent_005">Agent_005</option>
                </select>
            
                <label for="salesLead">Sales Lead</label>
                <input type="text" id="salesLead" name="salesLead" required>
           
                <label for="quote">Quote_ID</label>
                <input type="text" id="quote" name="quoteID" placeholder="Q_1001" required>
            
                <label for="warehouseDetails">Warehouse Details</label>
                <select id="warehouseDetails" name="warehouse" required>
                    <option value="Warehouse1">Warehouse_P01</option>
                    <option value="Warehouse2">Warehouse_P02</option>
                    <option value="Warehouse3">Warehouse_A01</option>
                    <option value="Warehouse4">Warehouse_A02</option>
                    <option value="Warehouse5">Warehouse_T01</option>
                </select>
            
                <label for="supplier">Supplier_ID</label>
                <input type="text" id="supplier" name="supplier" placeholder="S_01" required>
           
            <input type="submit" value="submit" name="submit">
            <a href="Sales_table.php">
                <button type="button">Back</button>
            </a>
        </form>
    </div>
</body>
</html>

