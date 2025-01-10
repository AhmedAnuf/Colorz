<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quotation Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body {
color: #404E67;
background: #F5F7FA;
font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
width: 700px;
margin: 30px auto;
background: #fff;
padding: 20px;
box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
padding-bottom: 10px;
margin: 0 0 10px;
}
.table-title h2 {
margin: 6px 0 0;
font-size: 22px;
}
.table-title .add-new {
float: right;
height: 30px;
font-weight: bold;
font-size: 12px;
text-shadow: none;
min-width: 100px;
border-radius: 50px;
line-height: 13px;
}
.table-title .add-new i {
margin-right: 4px;
}
table.table tr th, table.table tr td {
border-color: #e9e9e9;
}
table.table th i {
font-size: 13px;
margin: 0 5px;
cursor: pointer;
}
table.table th:last-child {
width: 100px;
}
table.table td a {
cursor: pointer;
display: inline-block;
margin: 0 5px;
min-width: 24px;
}
table.table td a.delete {
color: #E34724;
}
table.table td i {
font-size: 19px;
}
table.table td a.add i {
font-size: 24px;
margin-right: -1px;
position: relative;
top: 3px;
}
table.table .form-control {
height: 32px;
line-height: 32px;
box-shadow: none;
border-radius: 2px;
}
table.table .form-control.error {
border-color: #f50000;
}
table.table td .add {
display: none;
}
.Delbtn{
padding: 10px 20px;
background-color: red;
color: white;
font-weight: bold;
border: none;
border-radius: 3px;
cursor: pointer; 
}
button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
}
</style>
</head>
<body>
<a href="index.html">
	<button type="button">Back</button>
</a>
<div class="container">
<div class="table-wrapper">
<div class="table-title">
<div class="row">
<div class="col-sm-8"><h2>Quotation <b>Information</b></h2></div>
<div class="col-sm-4">
<a href="Quotations_Form.php">
    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
</a>
</div>
</div>
</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th >Quote ID</th>
        <th >Date</th>
        <th >Agent ID</th>
        <th >Lead ID</th>
        <th >Products</th>
      </tr>
    </thead>
    <tbody>
    <?php
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "colorz");

            $sql = "SELECT * FROM quote";
            $run = mysqli_query($connection, $sql);

            $uid=1;

            while($row = mysqli_fetch_array($run)) {
                //$uid = $row["NO"];
                
                $quoteid = $row["Quote_ID"];
                $date = $row["Date"];
                $salesagentid = $row["Sales_Agent_ID"];
                $leadID = $row["Lead_ID"];
                $products = $row["Products"];
                

                
                ?>
                <tr>
                    <td><?php echo $uid ?></td>
                    <td><?php echo $quoteid ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $salesagentid ?></td>
                    <td><?php echo $leadID ?></td>
                    <td><?php echo $products ?></td>


                    <td>
                        <a href="qdelete.php?del=<?php echo $quoteid ?>"><button class="Delbtn">Delete</button></a>
                    </td>



                </tr>
                <?php $uid++;
            }
            mysqli_close($connection);
            ?>
            
    <tr>
        
      </tr>
      <tr>

      </tr>
      <tr>

      </tr>
    </tbody>
  </table>
</div>
</div>
</body>
</html> 


