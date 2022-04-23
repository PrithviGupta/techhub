<?php
$servername="localhost";
$username="root";
$password="";
$database="techhub";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['addprodbtn'])){
$price=$_POST['price'];
$sku=$_POST['sku'];
$prodName=$_POST['prodname'];
$imagepath=$_POST['imgpath'];
$query="INSERT INTO `products` (`name`, `sku`, `price`, `image`) VALUES ('$prodName','$sku','$price','$imagepath');";
$r1=mysqli_query($conn,$query);
}
if(isset($_POST['delprodbtn'])){
    $prodId=$_POST['prodid2'];
$query="DELETE FROM `products` WHERE product_id='$prodId';";
$r1=mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ADMIN PANEL</a>
          <a class="navbar-brand" href="index.html">Logout</a>
        </div>
      </nav>
    <div id="addprod">
<h2>Add a Product</h2>
<form action="" method="POST">
    <table  cellspacing="15"><tr>
     <tr><td>Product Name</td><td><input type="text" name="prodname" placeholder="Product Name:" required></td></tr>
     <tr><td>SKU(Stock Keeping Unit):</td><td><input type="text" name="sku" placeholder="SKU(Stock Keeping Unit)" required></td></tr>
     <td>Price</td><td><input type="text" name="price" placeholder="Price" required></td></tr>
     <tr><td>Image:</td><td><input type="text" name="imgpath" placeholder="Image" required></td></tr>
     <tr><td colspan="2" align="center"><input type="submit" name="addprodbtn" value="Submit" id="btn"></td></tr>
    </table>
</form>
</div>

<div id="delprod">
    <h2>Delete a Product</h2>
    <form action="" method="POST">
        <table  cellspacing="15"><tr>
            <td>Product ID:</td><td><input type="text" name="prodid2" placeholder="Product ID" required></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" name="delprodbtn" value="Submit" id="btn"></td></tr>
           </table>
    </form>
    </div>

</body>
</html>