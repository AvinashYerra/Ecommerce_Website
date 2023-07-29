<?php

    include_once "auth.php";
    include "menuBar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="homeContainer">
        <form class="formContainer" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="heading">Upload Products</div>
            <div class="text">
                <label for="product_name">Name of Product :</label>
                <input type="text" name="product_name" >
            </div>
            <div class="number">
                <label for="product_price">Price :</label>
                <input type="number" name="product_price">
            </div>
            <div class="description">
                <textarea cols="45" rows="7" placeholder="Product description....." name="product_description"></textarea>
            </div>
            <input type="file" name="product_image">
            <button class="uploadBtn">upload</button>
        </form>
    </div>
    
</body>
</html>