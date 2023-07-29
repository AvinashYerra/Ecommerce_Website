<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .menuContainer{
            padding: 10px;
            position: relative;
            background-color: darkcyan;
            color: whitesmoke;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            height: 30px;
        }

        .menuContainer button{
            padding: 5px;
            width: auto;
            border-radius: 5px;
            height: 30px;
            border: 1px solid;
            background-color: #619b8a;
        }
        .menuContainer .logoutbtn{
            background-color: #FB6F92;
        }
    </style>
</head>
<body>
    <div class="menuContainer">
        <div>
            <a href="home.php"><button class="menubtn">Home</button></a>
            <a href="viewCart.php"><button class="menubtn">Cart</button></a>
            <a href="orders.php"><button class="menubtn">Orders</button></a>

        </div>
        <div class="logout">
            <a href="../Shared/logout.php">
                <button class="logoutbtn">Logout</button>
            </a>
        </div>
    </div>
    
</body>
</html>