<?php
include "connection.php";
?>

<html lang="en">
<head>
    <title>Laptop Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
        <h2>Laptop Form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="lname">Laptop name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter laptop name" name="lname">
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
            </div>
            <div class="form-group">
                <label for="price">Price (VND):</label>
                <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" class="form-control" id="stock" placeholder="Enter stock quantity" name="stock">
            </div>
            <button type="submit" name="insert" class="btn btn-default">Insert</button>
            <button type="submit" name="update" class="btn btn-default">Update</button>
            <button type="submit" name="delete" class="btn btn-default">Delete</button>
        </form>
    </div>
</div>

<div class="col-lg-12">
    <h2>Laptop List</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Laptop name</th>
            <th>Brand</th>
            <th>Price (VND)</th>
            <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($link)) {
            $res = mysqli_query($link, "SELECT * FROM latop");
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";  
                echo "<td>" . $row["brand"] . "</td>";
                echo "<td>" . number_format($row["price"], 0, ',', '.') . "</td>";
                echo "<td>" . $row["stock"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
<?php
if (isset($_POST["insert"])) {
    mysqli_query($link, "INSERT INTO latop VALUES (
        NULL,
        '$_POST[lname]',
        '$_POST[brand]',
        '$_POST[price]',
        '$_POST[stock]'
    )");
    ?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
    <?php
}
?>

</html>
